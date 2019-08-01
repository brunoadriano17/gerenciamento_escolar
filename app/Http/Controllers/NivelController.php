<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nivel;

class NivelController extends Controller
{
    public function index(){
        $niveis = Nivel::all();
        return view('indexn', compact('niveis'));
    }

    public function create(){

        return view('form_nivel');
    }

    public function store(Request $request){
        $nivel = Nivel::create([
            'nome' => $request->nome
        ]);

        return redirect('/nivel');
    }

    public function delete(Request $request){
        $i = Nivel::find($request->id);
        $i->softDelete();
        return redirect ('/nivel');
    }
}
