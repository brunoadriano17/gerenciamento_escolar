<?php

namespace App\Http\Controllers;

use App\Nivel;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        // $usuario = Usuario::create([
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'data_nascimento' => $request->data_nascimento,
        //     'nivel_id' => $request->nivel_id
        // ]);

        Usuario::create($request->all());

        return redirect('/');
    }

    public function edit($id){
        $usuario = Usuario::findOrFail($id);
        $niveis = Nivel::all();
        return view('form', compact('usuario', 'niveis'));

    }

    public function update(Request $request, $id){
        Usuario::findOrFail($id)->update($request->all());

        return redirect('/');
    }
}
