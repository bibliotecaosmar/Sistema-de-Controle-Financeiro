<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Conta;

class ContaController extends Controller
{
    public function index() {
        return view('pages.cadastro.conta');
    }
    
    public function relatorio() {
        $contas = Conta::all()->where('id', \Auth::user()->id);
        // Pegar o id do usuário
        // echo \Auth::user()->id;
        return view('pages.relatorio.conta', ['contas' => $contas]);
    }
    
    public function save(Request $request) {
        $id = $request->id;
        $codigo = $request->codigo;
        $titulo = $request->titulo;
        $tipo = $request->tipo;
        $descricao = $request->descricao;
        
        if ($id == null) {
            $conta = Conta::create([
                'codigo' => $codigo,
                'titulo' => $titulo,
                'tipo' => $tipo,
                'descricao' => $descricao,
            ]);
        } else {
            $conta = Conta::findOrFail($id);
            $conta->codigo = $codigo;
            $conta->titulo = $titulo;
            $conta->tipo = $tipo;
            $conta->descricao = $descricao;
        }

        $conta->save();
        return redirect()->route('cadastro.conta');
    }
    
    public function remove(Request $request) {
        $id = $request->id;
        $conta = Conta::findOrFail($id);
        
        return $conta->delete();
    }
    
    public function findOne(Request $request) {
        $id = $request->id;
        return Conta::findOrFail($id);
    }
    
    public function findAll() {
        return Conta::all();
    }
}
