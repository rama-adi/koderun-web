<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class IgCta extends Component
{
    public $show = true;

    public function mount()
    {
        if (session()->exists('showRecloudCta')) {
            $this->show = session()->get('showRecloudCta');
        }else{
            session(['showRecloudCta' => true]);
        }
    }
    public function render()
    {
        return view('livewire.ui.ig-cta');
    }

    public function closeCta()
    {
        session()->put('showRecloudCta', false);
        $this->show = false;
    }
}
