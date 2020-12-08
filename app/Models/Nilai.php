<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table='Nilai';
    protected $primarykey='id';
    protected $fillable = [
        'id_siswa',
        'semester',
        'id_matapelajaran',
        'tugas_1',
        'tugas_2',
        'tugas_3',
        'uts',
        'uas',
        'created_at',
        'updated_at'
    ];

    public function getnilaiID()
   {
       return sprintf('N-%03d', $this->id);
   }
   public function getnilaiIDplus()
   {
       return sprintf('N-%03d', $this->id+1);
   }
}
