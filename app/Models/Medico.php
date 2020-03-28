<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{

     protected $table ="Medicos";
     
    protected $fillable = [
        'nombre','user_id'
    ];

   
    protected $hidden = [
         'remember_token', 'create_at', 'update_at' 
    ];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
