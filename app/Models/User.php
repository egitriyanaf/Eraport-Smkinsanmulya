<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'role',
        'id_personil',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getuserID()
    {
        return sprintf('user-%03d', $this->id);
    }
    public function getuserIDplus()
    {
        return sprintf('user-%03d', $this->id+1);
    }

    public function getKodeIdPersonil(String $id, String $role, String $id_personil) {
        if ($role == "Guru") {
            $id_personil = "G-".$id_personil;
        } else if ($role == "Siswa") {
            $id_personil = "S-".$id_personil; 
        } else {
            $id_personil = "A-".$id;
        }
        return $id_personil;
    }
}
