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
        'alamat',
        'photo',
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

    public function getguruID()
    {
        return sprintf('Guru-%03d', $this->id);
    }
    public function getguruIDplus()
    {
        return sprintf('Guru-%03d', $this->id+1);
    }
}
