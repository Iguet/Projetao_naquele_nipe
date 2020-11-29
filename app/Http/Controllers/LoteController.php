<?php

namespace App\Http\Controllers;

use App\Lote;
use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\LoteRequest;

class LoteController extends Controller
{
    public function index()
    {
        $lotes = Lote::all();
        return view('lotes.index')->with('lotes', $lotes);
    }

    public function show($id = null)
    {
        $lote = Lote::find($id);
        $produtos = Produto::all();

        return view('lotes.cadastro', [
            'lote' => $lote,
            'produtos' => $produtos
        ]);
    }

    public function store(LoteRequest $request, Lote $lote)
    {
        $lote->fill($request->all());
        $lote->save();
        return redirect()->route('lotes.index')->with('success', 'Lote Cadastrado com Sucesso!');
    }

    public function update(LoteRequest $request, $id)
    {
        $lote = Lote::find($id);
        $lote->fill($request->all());
        $lote->save();
        return redirect()->route('lotes.index')->with('success', 'Lote Editado com Sucesso!');
    }

    public function destroy($id)
    {
        $produto = Lote::find($id);
        $produto->delete();
    }
}
