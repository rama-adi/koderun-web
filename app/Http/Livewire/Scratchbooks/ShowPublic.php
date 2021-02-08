<?php

namespace App\Http\Livewire\Scratchbooks;

use App\Enums\ScratchbookVisibility;
use App\Models\Scratchbook;
use App\Support\Services\PistonEvaluator;
use App\Support\Traits\HasLivewireAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class ShowPublic extends Component
{
    use HasLivewireAlert;

    public $scratchbook;
    public $team;
    public $showSharebox = false;


    public function render()
    {
        return view('livewire.scratchbooks.show-public');
    }

    public function showInterstitial()
    {
        $this->dispatchBrowserEvent('eval-output', view('standalone.interstitial')->render());
    }

    public function showOutput()
    {
        $eval = new PistonEvaluator($this->scratchbook->language, $this->scratchbook->code);
        $this->dispatchBrowserEvent('eval-output', $eval->executeCode());
    }

    public function setVisibility($visibility)
    {
        $perms = Gate::inspect('update', $this->scratchbook);
        if ($perms->allowed()) {
            DB::transaction(function () use ($visibility) {
                return tap($this->scratchbook->update([
                    'visibility' => $visibility
                ]), function () {
                    $this->showToast('Berhasil mempublikkan', 'success', 'Sukses!', ['cancelButtonText' => 'Okay!']);
                });
            });


        } else {
            $this->showToast($perms->message(), 'error', 'Gagal mempublikkan!');
        }

    }
}
