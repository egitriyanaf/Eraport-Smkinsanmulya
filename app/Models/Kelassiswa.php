<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelassiswa extends Model
{
    protected $table='kelassiswa';
    protected $primarykey='id';
    protected $fillable = [
        'siswa_id',
        'jurusan',
        'kelas_id',
        'created_at',
        'updated_at'
    ];

    
    public function nilai()
    {
        return $this->hasmany(Nilai::class);
    }
    

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    
    public function getkelassiswaID()
   {
       return sprintf('KS-%03d', $this->id);
   }
   public function getkelassiswaIDplus()
   {
       return sprintf('KS-%03d', $this->id+1);
   }
}
