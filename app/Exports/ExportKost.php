<?php

namespace App\Exports;

use App\Models\Kost;
use Maatwebsite\Excel\Concerns\FromCollection;
// ini untuk membuat header excel
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportKost implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kost::all();
    }

    public function headings(): array{
        return [
            'NO', 'NAMA KOST', 'LUAS KAMAR', 'ALAMAT', 'KETERANGAN', 'FASILITAS', 'FOTO', 'TANGGAL'
        ];
    }
}