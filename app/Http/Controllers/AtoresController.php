<?php

namespace App\Http\Controllers;

use App\Ator;
use Illuminate\Http\Request;

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
        return view('atores.index', ['atores' => $atores]);
    }

    public function create()
    {
        return view('atores.create');
    }

    public function store(Request $request)
    {
        $novo_ator = $request->all();
        Ator::create($novo_ator);
        return redirect('atores');
    }
}
