<?php

namespace App\Http\Controllers;

use App\Ator;

class AtoresController extends Controller
{
    // public function index()
    // {
    //     $nome = "Johnny Depp";
    //     return view('atores', ['nome' => $nome]);
    // }

    public function index()
    {
        $atores = Ator::all();
        return view('atores', ['atores' => $atores]);
    }
}
