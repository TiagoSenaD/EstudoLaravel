<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{

    public function listar($id = 0){
        return "A disciplina {$id} listada com sucesso";
    }

    public function listarInscrito($id = 0){
        return response()->json([
            fake()->name(),
            fake()->name(),
            fake()->name(),
            fake()->name(),
            fake()->name(),
        ]);
    }

}