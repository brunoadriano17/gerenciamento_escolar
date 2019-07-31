<?php

namespace App\Http\Controllers;

use App\Nivel;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $niveis = Nivel::all();
        $usuarios = Usuario::all();
        return view('index', compact('niveis', 'usuarios'));
    }

    public function soma($a, $b){
        return 'Soma: ' . ($a + $b);
    }

    public function create(){
        $niveis = Nivel::all();
        return view('form', compact('niveis'));
    }

    public function store(Request $request){
        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'nivel_id' => $request->nivel_id
        ]);

        return redirect('/');
    }
}
