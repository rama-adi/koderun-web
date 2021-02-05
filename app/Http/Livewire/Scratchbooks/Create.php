<?php

namespace App\Http\Livewire\Scratchbooks;

use App\Support\HasTemporaryVariables;
use Livewire\Component;

class Create extends Component
{
    use HasTemporaryVariables;

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
            $this->alert('error', 'Error!', [
                'position' => 'bottom',
                'timer' => 3000,
                'toast' => true,
                'text' => 'Kamu belum memilih bahasa!',
                'confirmButtonText' => 'Ok',
                'cancelButtonText' => 'Batalkan',
                'showCancelButton' => true,
                'showConfirmButton' => false,
            ]);
        } elseif (!scratch_lang_exist((int)$this->getTempVar('lang'))) {
            $this->alert('error', 'Error!', [
                'position' => 'bottom',
                'timer' => 3000,
                'toast' => true,
                'text' => 'Bahasa itu tidak ada!',
                'confirmButtonText' => 'Ok',
                'cancelButtonText' => 'Batalkan',
                'showCancelButton' => true,
                'showConfirmButton' => false,
            ]);

        } else {
            $this->language = (int)$this->getTempVar('lang');
            $this->sbPage = 1;
        }
    }

    public function cancelRename()
    {
        $this->setTempVar('changeName', '');
        $this->changeNameDialog = false;
    }

    public function setOutput()
    {
        $this->dispatchBrowserEvent('eval-output', $this->code == [] ? '' : $this->code);
    }

    public function changeScratchbookName()
    {
        if(!filled($this->getTempVar('changeName'))){
            $this->alert('error', 'Error!', [
                'position' => 'bottom',
                'timer' => 3000,
                'toast' => true,
                'text' => 'Input nama kosong!',
                'confirmButtonText' => 'Ok',
                'cancelButtonText' => 'Batalkan',
                'showCancelButton' => true,
                'showConfirmButton' => false,
            ]);
        }else{
            $this->title = $this->getTempVar('changeName');
            $this->setTempVar('changeName', '');
            $this->changeNameDialog = false;
        }
    }

    public function saveScratchbook()
    {
        dd($this->code);
    }

}
