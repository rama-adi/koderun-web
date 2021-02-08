<?php

namespace App\Http\Livewire\Scratchbooks;

use App\Models\Scratchbook;
use App\Support\Services\PistonEvaluator;
use App\Support\Traits\HasLivewireAlert;
use App\Support\Traits\HasTemporaryVariables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Edit extends Component
{
    use HasTemporaryVariables, HasLivewireAlert;

    public array $tempVar = [
        "lang" => "",
        "changeName" => "",
    ];
    public Scratchbook $scratchbook;
    public string $code = "";

    public bool $changeNameDialog = false;
    public string $title;

    public function mount()
    {
        $this->title = $this->scratchbook->title;
    }

    public function render()
    {
        return view('livewire.scratchbooks.edit');
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
        $eval = new PistonEvaluator($this->scratchbook->language, $this->code);
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
        $perms = Gate::inspect('update', $this->scratchbook);
        if ($perms->allowed()) {

            $this->validate([
                'code' => 'required|min:1',
                'title' => 'required|max:255'
            ]);

            DB::transaction(function () {
                return tap($this->scratchbook->update([
                    'title' => $this->title,
                    'code' => $this->code,
                    'last_edit_by_id' => Auth::user()->id
                ]), function () {
                    session()->flash('successState', 'Update scratchbook berhasil!');
                    return redirect()->route('scratchbook.show', [
                        'team' => Auth::user()->currentTeam->username,
                        'slug' => $this->scratchbook->slug,
                    ]);
                });
            });

        } else {
            $this->showToast($perms->message(), 'error', 'Gagal menyimpan!');
        }
    }
}
