<?php

namespace App\Exports;

use App\Models\Pembayaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPembayaran implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pembayaran::all();
    }

    public function headings(): array{
        return [
            'NO', 'KODE BAYAR', 'IN DATE', 'OUT DATE', 'TOTAL PEMBAYARAN', 'KAMAR', 'CUSTOMER'
        ];
    }
}