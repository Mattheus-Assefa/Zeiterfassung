<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;
use App\Models\Zeiterfassung;
use Livewire\Component;

#[Title('Neue-Zeiterfassung')] class NeueZeiterfassung extends Component
{
    #[Rule('required|min:1')]
    public $Name;

    #[Rule('required')]
    public $Kategorie;

    #[Rule('required|date_format:Y-m-d|before_or_equal:today')]
    public $Datum;

    #[Rule('required')]
    public $Startzeit;

    #[Rule('required')]
    public $Endzeit;

    #[Rule('required')]
    public $Soll_Arbeitszeit;

    #[Rule('required|Integer')]
    public $Mittagsapause;
    
    #[Rule('max:100')]
    public $Notiz;

    public function add_data_to_db()
    {
        Zeiterfassung::create([
            'Name' => $this->Name,
            'Datum' => $this->Datum,
            'Kategorie' => $this->Kategorie,
            'Arbeitsbeginn' => $this->Startzeit,
            'Arbeitsende' => $this->Endzeit,
            'Mittagspause' => $this->Mittagsapause,
            'Arbeitszeit' => '08:00',
            'Soll_Arbeitszeit' => $this->Soll_Arbeitszeit,
            'Ueberstunden_Minusstunden' => '00:00',
            'Notiz' => $this->Notiz,
        ]);
    }


    public function render()
    {
        return view('livewire.neue-zeiterfassung');
    }
}
