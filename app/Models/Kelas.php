<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{   protected $table='Kelas';
    protected $primarykey='id';
    protected $fillable = [
        'tahun_ajaran',
        'kelas',
        'nama_kelas',
        'wali_kelas',
        'created_at',
        'updated_at'
    ];
    public function getkelasID()
   {
       return sprintf('K-%03d', $this->id);
   }
   public function getkelasIDplus()
   {
       return sprintf('K-%03d', $this->id+1);
   }
}
