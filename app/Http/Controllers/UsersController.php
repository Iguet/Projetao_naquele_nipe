<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }
}
