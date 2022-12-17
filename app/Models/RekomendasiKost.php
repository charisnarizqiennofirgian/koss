<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiKost extends Model
{
    use HasFactory;
    protected $table = 'rekomendasi_kost';
    protected $fillable = ['id', 'created_at', 'updated_at', 'kost_id'];
}