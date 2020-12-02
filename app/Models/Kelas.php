<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='Kelas';
    protected $primarykey='kode_kelas';
    protected $fillable = [
        'tahun_ajaran',
        'kelas',
        'nama_kelas',
        'wali_kelas',
        'kelas',
        'created_at',
        'updated_at'
    ];
}
