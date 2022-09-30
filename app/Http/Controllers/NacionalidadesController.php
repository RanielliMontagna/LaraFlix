<?php

namespace App\Http\Controllers;

use App\Nacionalidade;
use App\Http\Requests\NacionalidadeRequest;

class NacionalidadesController extends Controller
{
    public function index()
    {
        $nacionalidades = Nacionalidade::orderBy('descricao')->paginate(5);
        return view('nacionalidades.index', ['nacionalidades' => $nacionalidades]);
    }

    public function create()
    {
        return view('nacionalidades.create');
    }

    public function store(NacionalidadeRequest $request)
    {
        $novo_nacionalidade = $request->all();
        Nacionalidade::create($novo_nacionalidade);

        return redirect()->route('nacionalidades');
    }

    public function destroy($id)
    {
        Nacionalidade::find($id)->delete();
        return redirect()->route('nacionalidades');
    }

    public function edit($id)
    {
        $nacionalidade = Nacionalidade::find($id);
        return view('nacionalidades.edit', compact('nacionalidade'));
    }
}
