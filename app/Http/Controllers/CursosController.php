<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{

    public function listar(){
        return response()->json([
            fake()->name(),
            fake()->name(),
            fake()->name(),
            fake()->name(),
            fake()->name(),
        ]);
    }

    public function criaCurso(Request $request){
        return $request;
    }
    
    public function listarCursos($id = 0){
        return "O curso {$id} foi listado com sucesso";
    }

    public function atualizarCursos($id = 0){
        return "O curso {$id} foi atualizado com sucesso";
    }

    public function deletarCursos($id = 0){
        return "O curso {$id} foi deletado com sucesso";
    }               
}