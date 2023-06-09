<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $fillable = ['nama_kota', 'created_at', 'updated_at'];

    public function kost()
    {
        return $this->hasMany(Kost::class);
    }
}