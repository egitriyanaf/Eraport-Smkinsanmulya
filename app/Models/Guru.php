<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{   protected $table='Guru';
    protected $primarykey='id';
    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'telepon',
        'photo',
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
