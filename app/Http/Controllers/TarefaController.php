<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    //
    public function index(){
        $tarefa = Tarefa::all();
        return view('tarefas', compact('tarefa'));
    }
}
