<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='Siswa';
    protected $primarykey='id';
    protected $fillable = [
        'nis',
        'nama',
        'jenis_kelamin',
        'telepon',
        'photo',
        'tanggal_lahir',
        'tempat_lahir',
        'agama',
        'alamat',
        'tahun_angkatan',
        'email',
        'password',
        'role',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
