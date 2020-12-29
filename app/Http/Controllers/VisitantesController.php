<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitante;

class VisitantesController extends Controller
{
    public function index(){
		return view('visitantes.index');
    }

    public function salvar(Request $request){
        $dados = $request->all();
        // dd($dados);

        Visitante::create([
            "nome" => $dados['nome'],
            "telefone" => $dados['telefone'],
            "data_hora" => $dados['btn-agendar'],
        ]);

        return redirect()->back()->with('success', 'Visitante add com sucesso');
    }
}
