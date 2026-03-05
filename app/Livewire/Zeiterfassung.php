<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

#[Title('Arbeitszeiterfassung')] class Zeiterfassung extends Component
{
    public $columns;

    public $rows;

    public $Names;

    public $current_name = '';

    public $current_month;

    public $current_category;

    public $months = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function boot()
    {
        $this->columns = ['Name', 'Datum', 'Kategorie', 'Arbeitsbeginn', 'Arbeitsende',  'Arbeitszeit', 'Ueberstunden_Minusstunden'];
        $this->rows = DB::table('zeiterfassungs')
            ->select($this->columns)
            ->orderBy('Datum', 'desc')
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
}
