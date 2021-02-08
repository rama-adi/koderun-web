<?php

namespace App\Http\Livewire\Ui;

use App\Enums\ScratchbookVisibility;
use App\Models\Scratchbook;
use App\Support\Traits\HasLivewireAlert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class CloneButton extends Component
{
    use HasLivewireAlert;

    public Scratchbook $scratchbook;
    public bool $showCloneDialog = false;
    public string $scratchTitle = '';

    public function render()
    {
        return view('livewire.ui.clone-button');
    }

    public function cloneScratchbook()
    {
        $perms = Gate::inspect('clone', $this->scratchbook);
        if ($perms->allowed()) {
            $this->validate([
               'scratchTitle' => 'required'
            ]);
            DB::transaction(function () {
                return tap(Scratchbook::create([
                    'team_id' => Auth::user()->currentTeam->id,
                    'title' => $this->scratchTitle,
                    'slug' => generate_slug($this->scratchTitle),
                    'code' => $this->scratchbook->code,
                    'language' => $this->scratchbook->language,
                    'visibility' => ScratchbookVisibility::PRIVATE,
                    'creator_id' => Auth::user()->id
                ]), function ($scratchbook) {
                    session()->flash('successState', 'Clone scratchbook berhasil!');
                    return redirect()->route('scratchbook.show', [
                        'team' => Auth::user()->currentTeam->username,
                        'slug' => $scratchbook->slug
                    ]);
                });
            });


        } else {
            $this->showToast($perms->message(), 'error', 'Gagal mempublikkan!');
        }

    }
}
