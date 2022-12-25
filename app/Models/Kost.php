<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;
use App\Models\User;
use Fasilitas;

class Kost extends Model
{
    use HasFactory;
    /**
     * - Mapping table
     * - Mapping kolom
     */
    protected $table = 'kost';
    protected $fillable = ['id','foto_kamar', 'nama_kost', 'luas_kamar', 'harga_kamar', 'alamat_kost', 'keterangan', 'id_fasilitas', 'id_user', 'kota_id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}