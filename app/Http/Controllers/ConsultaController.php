<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function getUsers(){
        return User::find(1);

    }
    
}
