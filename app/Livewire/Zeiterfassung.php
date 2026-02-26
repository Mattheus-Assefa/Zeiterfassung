<?php

namespace App\Livewire;

use App\Models\Zeiterfassung as Zeiterfassung_Model;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

#[Title('Arbeitszeiterfassung')] class Zeiterfassung extends Component
{
    public $columns;

    public $rows;

    public $Names;

    public $current_name = '';

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function boot()
    {
        $this->columns = ['Name', 'Datum', 'Kategorie', 'Arbeitsbeginn', 'Arbeitsende', 'Mittagspause', 'Arbeitszeit', 'Soll_Arbeitszeit', 'Ueberstunden_Minusstunden'];
        $this->rows = DB::table('zeiterfassungs')
            ->select($this->columns)
            ->orderBy('Datum', 'asc')
            ->get();

        $this->get_names();
    }

    public function get_names()
    {
        $this->Names = DB::table('zeiterfassungs')
            ->select(['Name'])
            ->orderBy('Name', 'asc')
            ->distinct()
            ->get();
    }

    public function testdata()
    {
        Zeiterfassung_Model::create([
            'Name' => 'Gwen',
            'Datum' => '2026-02-13',
            'Kategorie' => 'Arbeitstag',
            'Arbeitsbeginn' => '08:00',
            'Arbeitsende' => '16:30',
            'Mittagspause' => '00:30',
            'Arbeitszeit' => '08:00',
            'Soll_Arbeitszeit' => '08:00',
            'Ueberstunden_Minusstunden' => '00:00',
        ]);

        Zeiterfassung_Model::create([
            'Name' => 'Stacy',
            'Datum' => '2026-02-11',
            'Kategorie' => 'Arbeitstag',
            'Arbeitsbeginn' => '08:00',
            'Arbeitsende' => '16:30',
            'Mittagspause' => '00:30',
            'Arbeitszeit' => '08:00',
            'Soll_Arbeitszeit' => '08:00',
            'Ueberstunden_Minusstunden' => '00:00',
        ]);

        $this->dispatch('refresh');

    }
}
