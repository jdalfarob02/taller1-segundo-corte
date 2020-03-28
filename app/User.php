<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

   
    protected $fillable = [
    
        'name', 'email','telefono','estado_id' 
        ,
    ];

   
    protected $hidden = [
         'remember_token', 
    ];

    
    public function carnet()
    {
        return $this->hasOne('App\Models\Carnet');
    }

    public function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }

    public function medicos()
    {
        return $this->hasMany('App\Models\Medico');
    }

    public function cuartos()
    {
            return $this->belongsToMany('App\Models\Cuarto');
    }





    
}
