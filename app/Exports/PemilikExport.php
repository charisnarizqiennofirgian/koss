<?php

namespace App\Exports;

use App\Models\Kost;
use App\Models\User;
use App\Models\Fasilitas;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PemilikExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $pemilik_kost = DB::table('users')
        ->join('kost', 'kost.id_user', '=', 'users.id')
        ->join('fasilitas', 'fasilitas.id', '=', 'kost.id_fasilitas')
        ->select('name', 'telp','luas_kamar', 'harga_kamar', 'alamat_kost', 'keterangan', 'fasilitas')
        ->where('role', 'pemilik')
        ->get();
        return $pemilik_kost;
    }

    public function headings(): array{
        return [
            'NAMA PEMILIK','TELPON', 'HARGA', 'LUAS KAMAR', 'ALAMAT KOST', 'KETERANGAN', 'FASILITAS'
        ];
    }
}
