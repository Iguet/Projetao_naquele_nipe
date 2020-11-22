<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index')->with('vendas', $vendas);
    }

    public function show($id = null)
    {
        $venda = Venda::find($id);
        $produtos = Produto::select(
            'produtos.id as id',
            'produtos.nome as nome'
        )
            ->join('lotes', 'lotes.produto_id', 'produtos.id')
            ->get();

        return view('vendas.cadastro', [
            'venda' => $venda,
            'produtos' => $produtos
        ]);
    }

    public function store(Request $request, Venda $venda)
    {
        $venda->fill($request->all());
        $venda->save();
        return redirect()->route('vendas.index')->with('success', 'Venda Cadastrado com Sucesso!');
    }

    public function update(Request $request, $id)
    {
        $venda = Venda::find($id);
        $venda->fill($request->all());
        $venda->save();
        return redirect()->route('vendas.index')->with('success', 'Venda Editado com Sucesso!');
    }

    public function destroy($id)
    {
        $produto = Venda::find($id);
        $produto->delete();
    }
}
