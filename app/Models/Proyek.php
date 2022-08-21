<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_proyek',
        'user_id',
        'anggaran_proyek',
        'pv',
        'ev',
        'ac',
        'cv',
        'sv',
        'spi',
        'cpi',
        'etc',
        'ecc',
        'ect',
        'jangka_proyek',
    ];
}
