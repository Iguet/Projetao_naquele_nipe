<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index')->with('produtos', $produtos);
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.cadastro')->with('produto', $produto);
    }

    public function store(Request $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('produtos.index')->with('success');
    }
}
