<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    //
    public function index(){
        return view('teste');
    }

    public function create(){
        return view('lista-teste');
    }
}
