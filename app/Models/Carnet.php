<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carnet extends Model
{
    protected $table ="carnets";
    protected $fillable = [
        'user_id', 'carnet'
        ,
    ];

   
    protected $hidden = [
         'remember_token', 'create_at', 'update_at' 
    ];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function localidad()
    {
        return $this->hasOne('App\Models\Localidad');
    }


}
