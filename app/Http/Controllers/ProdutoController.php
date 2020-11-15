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

    public function show($id = null)
    {
        $produto = null;

        if ($id) $produto = Produto::findOrFail($id);

        return view('produtos.cadastro', ['produto' => $produto]);
    }

    public function store(Request $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('produtos.index')->with('success', 'Produto Cadastrado com Sucesso!');
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('produtos.index')->with('success', 'Produto Editado com Sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
    }
}
