<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Attributes\Rule;
use App\Models\Zeiterfassung;
use Livewire\Component;

#[Title('Neue-Zeiterfassung')] class NeueZeiterfassung extends Component
{
    #[Rule('required')]
    public $Name;

    #[Rule('required')]
    public $Kategorie;

    #[Rule('required|date_format:Y-m-d|before_or_equal:today')]
    public $Datum;

    #[Rule('nullable')]
    public $Startzeit;

    #[Rule('nullable')]
    public $Endzeit;

    #[Rule('nullable')]
    public $Soll_Arbeitszeit;

    #[Rule('nullable|Integer')]
    public $Mittagspause;

    #[Rule('nullable|max:100')]
    public $Notiz;

    public function add_data_to_db()
    {

        $this->validate();

        if ($this->correct() == false) {
            return;
        }

        Zeiterfassung::create([
            'Name' => $this->Name,
            'Datum' => $this->Datum,
            'Kategorie' => $this->Kategorie,
            'Arbeitsbeginn' => $this->Startzeit ?? '',
            'Arbeitsende' => $this->Endzeit ?? '',
            'Mittagspause' => $this->Mittagspause ?? '',
            'Arbeitszeit' => (string)$this->calculate_time_worked() ?? '',
            'Soll_Arbeitszeit' => $this->Soll_Arbeitszeit ?? '',
            'Ueberstunden_Minusstunden' => (string)$this->calculate_overtime_undertime() ?? '',
            'Notiz' => $this->Notiz ?? '',
        ]);
        $this->reset(['Name', 'Kategorie', 'Datum', 'Startzeit', 'Endzeit', 'Soll_Arbeitszeit', 'Mittagspause', 'Notiz']);
    }

    public function calculate_time_worked()
    {

        if ($this->Startzeit == null || $this->Endzeit == null) {
            return null;
        }

        $interval = date_diff(date_create($this->Startzeit), date_create($this->Endzeit));
        $minutes = $interval->days * 24 * 60;
        $minutes += $interval->h * 60;
        $minutes += $interval->i;
        $minutes -= (int)$this->Mittagspause; // because break isn't included in the work time
        return $minutes;
    }

    public function calculate_overtime_undertime()
    {
        if ($this->Startzeit == null || $this->Endzeit == null || $this->Soll_Arbeitszeit == null) {
            return null;
        }

        $amount_worked = $this->calculate_time_worked();
        $shouldve_worked = $this->convert_hour_into_minutes($this->Soll_Arbeitszeit);

        return $amount_worked - $shouldve_worked;
    }

    public function convert_hour_into_minutes($time)
    {
        $time = explode(':', $time);
        return ($time[0] * 60) + ($time[1]);
    }

    public function correct()
    {
        if ($this->Kategorie == "Arbeitstag") {
            if ($this->Startzeit == null) {
                return false;
            }
            if ($this->Endzeit == null) {
                return false;
            }
            if ($this->Soll_Arbeitszeit == null) {
                return false;
            }
            if ($this->Mittagspause == null) {
                return false;
            }
        }

        return true;
    }

    public function render()
    {
        return view('livewire.neue-zeiterfassung');
    }
}
