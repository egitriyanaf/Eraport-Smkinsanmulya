<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelassiswa extends Model
{
    protected $table='kelassiswa';
    protected $primarykey='id';
    protected $fillable = [
        'nis',
        'nama',
        'jurusan',
        'tahun_ajaran',
        'kelas',
        'nama_kelas',
        'wali_kelas',
        'created_at',
        'updated_at'
    ];

    public function getkelassiswaID()
   {
       return sprintf('KS-%03d', $this->id);
   }
   public function getkelassiswaIDplus()
   {
       return sprintf('KS-%03d', $this->id+1);
   }
}
