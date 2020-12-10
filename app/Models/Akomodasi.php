<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akomodasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_akomodasi', 'nama_akomodasi','alamat_akomodasi','kontak_akomodasi'
    ];
}
