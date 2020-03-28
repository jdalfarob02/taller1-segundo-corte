<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table ="estados";
    protected $fillable = [
        'estado'
    ];

   
    protected $hidden = [
         'remember_token', 'create_at', 'update_at' 
    ];

    
    public function users()
    {
        return $this->hasMany('App\User');
    }
    
}
