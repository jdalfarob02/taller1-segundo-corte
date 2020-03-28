<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuarto extends Model

{
    protected $table ="cuartos";
    protected $fillable = [
        'cuarto'
    ];

   
    protected $hidden = [
         'remember_token', 'create_at', 'update_at' 
    ];

    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
