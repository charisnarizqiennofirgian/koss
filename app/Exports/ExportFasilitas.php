<?php

namespace App\Exports;

use App\Models\Fasilitas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportFasilitas implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fasilitas::all();
    }

    public function headings(): array{
        return [
            'NO', 'NAMA FASILITAS', 'DATE IN', 'DATE OUT'
        ];
    }
}