<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table ="localidads";
    protected $fillable = [
        'carnet_id','name'
    ];

   
    protected $hidden = [
         'remember_token', 'create_at', 'update_at' 
    ];

    
    public function carnet()
    {
        return $this->belongsTo('App\Models\carnet');
    }
}
