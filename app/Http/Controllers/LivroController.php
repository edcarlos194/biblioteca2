<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'autor' => 'required|max:50',
            'ano_publicacao' => 'required|integer',
            'resumo' => 'nullable|string',
        ]);

        Livro::create($request->all());

        return redirect()->route('livros.index')->with('success', 'Livro adicionado com sucesso!');
    }
}