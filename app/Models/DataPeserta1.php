<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeserta1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pasien',
        'alamat',
        'nohp',
        'usia',
    ];
}
