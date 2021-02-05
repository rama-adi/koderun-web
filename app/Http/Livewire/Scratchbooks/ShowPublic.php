<?php

namespace App\Http\Livewire\Scratchbooks;

use Livewire\Component;

class ShowPublic extends Component
{
    public $scratchbook;
    public $team;


    public function render()
    {
        return view('livewire.scratchbooks.show-public');
    }
}
