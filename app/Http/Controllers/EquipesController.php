<?php

namespace App\Http\Controllers;

use App\Equipe;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    public function index()
    {
        $equipes = Equipe::get();
        return view('equipes.index')->with('equipes',$equipes);
    }

    public function store(Request $request)
    {
        $equipe = new Equipe;
        $equipe->nome = $request->input('nome');
        $equipe->meta = $request->input('meta');

        $equipe->save();
        return redirect('/equipes')->with('success',"Cadastrado com sucesso!");
    }

    public function show($id)
    {
        return view('equipes.edit', ['equipe' => Equipe::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "nome" => ["required", "max:191", "string"],
            "supervisor_id" => ["integer", "nullable"],
            "meta" => ["integer", "nullable"]
        ]);

        $equipe = Equipe::findOrFail($id)->update($data);

        return $equipe;
    }

    public function destroy($id)
    {
        Equipe::findOrFail($id)->delete();

        return redirect('/equipes')->with('success',"Excluido com sucesso!");
    }
}
