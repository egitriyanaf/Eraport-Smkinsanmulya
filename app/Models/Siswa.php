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

    
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
    
    public function kelassiswa()
    {
        return $this->hasMany(Kelassiswa::class);
    }

    public function getsiswaID()
    {
        return sprintf('Siswa-%03d', $this->id);
    }
    public function getsiswaIDplus()
    {
        return sprintf('Siswa-%03d', $this->id+1);
    }
}
