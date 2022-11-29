<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    /**
     * - mapping table
     * - mapping kolom
     */
    protected $table = 'fasilitas';
    protected $fillable = ['fasilitas'];
}