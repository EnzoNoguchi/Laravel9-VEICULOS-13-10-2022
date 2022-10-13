<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCarro extends Controller
{
    public function cadastro()
    {
        return view('cadastrarCarro');
    }
}
