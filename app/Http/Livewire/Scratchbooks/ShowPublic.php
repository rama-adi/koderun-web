<?php

namespace App\Http\Livewire\Scratchbooks;

use App\Support\Services\PistonEvaluator;
use Livewire\Component;

class ShowPublic extends Component
{
    public $scratchbook;
    public $team;


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
}
