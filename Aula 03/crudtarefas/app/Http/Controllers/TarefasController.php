<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefasController extends Controller
{
    //

    public function index() {
        $tarefas = \App\Models\Tarefas::all();
        return view('tarefas.index', compact('tarefas'));
    }

    public function store(\Illuminate\Http\Request $request) {
        \App\Models\Tarefas::create($request->all());
        return redirect('/tarefas');
    }

    public function destroy($id) {
        $tarefa = \App\Models\Tarefas::findOrFail($id);
        $tarefa -> delete();
        return redirect('/tarefas');
    }

    public function edit($id) {
        $tarefa = \App\Models\Tarefas::findOrFail($id);
        return view('tarefas.edit', compact('tarefa'));
    }

    public function update(Request $request, $id) {
        $tarefa = \App\Models\Tarefas::findOrFail($id);
        $tarefa -> update($request->all());
        return redirect('/tarefas');
    }
}
