<?php

namespace App\Http\Livewire\Scratchbooks;

use App\Enums\ScratchbookVisibility;
use App\Models\Scratchbook;
use App\Support\Services\PistonEvaluator;
use App\Support\Traits\HasLivewireAlert;
use App\Support\Traits\HasTemporaryVariables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Create extends Component
{
    use HasTemporaryVariables, HasLivewireAlert;

    // Stores temporary variables
    public array $tempVar = [
        "lang" => "",
        "changeName" => "",
    ];

    public ?int $language = 1;
    public int $sbPage = 0;
    public string $title = "Scratchbook baru";


    public string $code = "";
    public bool $changeNameDialog = false;


    public function render()
    {
        return view('livewire.scratchbooks.create');
    }

    public function selectLanguage()
    {
        if (!filled($this->getTempVar('lang'))) {
            $this->showToast('Belum memilih bahasa!', 'error', 'Gagal melanjutkan wizard!');
        } elseif (!scratch_lang_exist((int)$this->getTempVar('lang'))) {
            $this->showToast('Bahasa itu tidak ada', 'error', 'Gagal melanjutkan wizard!');
        } else {
            $this->language = (int)$this->getTempVar('lang');
            $this->sbPage = 1;
        }
    }

    public function cancelRename()
    {
        $this->changeNameDialog = false;
        $this->setTempVar('changeName', '');
    }
    public function showInterstitial()
    {
        $this->dispatchBrowserEvent('eval-output', view('standalone.interstitial')->render());
    }

    public function showOutput()
    {
        $eval = new PistonEvaluator($this->language, $this->code);
        $this->dispatchBrowserEvent('eval-output', $this->code == [] ? '' : $eval->executeCode());
    }

    public function changeScratchbookName()
    {
        if (!filled($this->getTempVar('changeName'))) {
            $this->showToast('Input nama kosong!', 'error', 'Gagal mengganti nama!');
        } else {
            $this->title = $this->getTempVar('changeName');
            $this->setTempVar('changeName', '');
            $this->changeNameDialog = false;
        }
    }

    public function saveScratchbook()
    {
        $perms = Gate::inspect('create', Scratchbook::class);
        if ($perms->allowed()) {

            $this->validate([
                'code' => 'required|min:1',
                'title' => 'required|max:255'
            ]);

            DB::transaction(function () {
                return tap(Scratchbook::create([
                    'team_id' => Auth::user()->currentTeam->id,
                    'title' => $this->title,
                    'slug' => generate_slug($this->title),
                    'code' => $this->code,
                    'language' => $this->language,
                    'visibility' => ScratchbookVisibility::PRIVATE,
                    'creator_id' => Auth::user()->id
                ]), function ($scratchbook) {
                    session()->flash('successState', 'Pembuatan scratchbook berhasil!');
                    return redirect()->route('scratchbook.show', [
                        'team' => Auth::user()->currentTeam->username,
                        'slug' => $scratchbook->slug
                    ]);
                });
            });


        } else {
            $this->showToast($perms->message(), 'error', 'Gagal menyimpan!');
        }
    }

}
