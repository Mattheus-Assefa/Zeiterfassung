<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Neue-Zeiterfassung')] class NeueZeiterfassung extends Component
{
    public function render()
    {
        return view('livewire.neue-zeiterfassung');
    }
}
