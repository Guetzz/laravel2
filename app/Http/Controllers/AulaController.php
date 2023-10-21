<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function mostrarFormAula(){
        return view('cad_Aula');
    }
}
