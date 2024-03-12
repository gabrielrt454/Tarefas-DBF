<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarefa2;


class TarefaController extends Controller
{
    public function listar(){
        $tarefa = Tarefa2::all();
        //return $tarefa;
        return view('listarTarefa')->with('tarefa',$tarefa);

    }
    public function listarId($id){
        $tarefa = Tarefa2::find($id);
        if ($tarefa){
        return response()->json($tarefa);
        }else{
            return redirect('/listar')->withErrors(['erro' => 'Jogador não encontrado']);

        }
    }
    public function store(Request $request){
       return $request->all();
       // $tarefa = new Tarefa2;
       // $tarefa ->nome =$request->nome;
       // $tarefa ->raca =$request->raca;
        // $tarefa ->classe =$request->classe;
        // $tarefa ->idade =$request->idade;
        // $tarefa ->arma = $request->arma;
        // $tarefa->save();


        //return response()->json($tarefa,201);
    }
}
