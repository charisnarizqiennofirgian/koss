<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Fasilitas;

class Kost extends Model
{
    use HasFactory;
    /**
     * - Mapping table
     * - Mapping kolom
     */
    protected $table = 'kost';
    protected $fillable = ['foto_kamar', 'nama_kost', 'luas_kamar', 'harga_kamar', 'alamat_kost', 'keterangan', 'id_fasilitas', 'id_user', 'kota_id'];
}