<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


Class SessionController  extends Controller
{
    public function create () {

        return view('login');

    }

    public function cargar () {

        if (auth()-> attempt(request(['email','password'])) == false) {
        
                return back()->withErrors(['message'=>'El correo o el password son invalidos']);

        }

        return redirect()->to('/');

    }

}

