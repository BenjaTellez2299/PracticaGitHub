<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarFormPrim;
use Illuminate\Http\Request;

class controladorViews extends Controller
{
    public function guardarForm(validarFormPrim $req){
        return redirect('form')->with('confirmacion','Llegó Correcto');
    }

    public function showHome(){
        return view('welcome');
    }

    public function showMain(){
        return view('main');
    }
    
    public function showForm(){
        return view('form');
    }

    public function showTable(){
        return view('table');
    }
}
