<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    protected $table='Matapelajaran';
    protected $primarykey='id';
    protected $fillable = [
        'nama_pelajaran',
        'keterangan',
        'created_at',
        'updated_at'
    ];

    
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
    
   public function getmatapelajaranID()
   {
       return sprintf('P-%03d', $this->id);
   }
   public function getmatapelajaranIDplus()
   {
       return sprintf('P-%03d', $this->id+1);
   }
}
