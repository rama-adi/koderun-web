<?php

namespace App\Http\Livewire\Ui;

use App\Models\Team;
use Livewire\Component;

class StarScratchbook extends Component
{
    public $scratchbook;
    public $starred;
    public $stars;


    public function mount()
    {
        $this->stars = $this->scratchbook->stars()->count();
        $this->starred = count($this->scratchbook
                ->stars()
                ->where('team_id', \Auth::user()->currentTeam->id)
                ->get()) > 0;
    }

    public function render()
    {

        return view('livewire.ui.star-scratchbook');
    }

    public function starAction()
    {
        if ($this->starred) {
            $this->scratchbook->stars()->detach(Team::find(\Auth::user()->current_team_id));
            $this->starred = false;

        } else {
            $this->scratchbook->stars()->attach(Team::find(\Auth::user()->current_team_id));
            $this->starred = true;
        }
        $this->stars = $this->scratchbook->stars()->count();
    }
}
