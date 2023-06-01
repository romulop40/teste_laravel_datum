<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function index()
    {
        /**dd(Alunos::get());*/
        $alunos = Alunos::get();

        return view('index', [
            'alunos' => $alunos
        ]);
    }

    public function show(int $id)
    {
        $aluno = Alunos::find($id);
        return view('show', [
            'aluno' => $aluno
        ]);
        /*$aluno= Alunos::find($id);
        dd($aluno);*/
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Alunos::create($dados);

        return redirect('/alunos');
    }

    public function edit(int $id)
    {
        $aluno = Alunos::find($id);

        return view('edit', [
            'aluno' => $aluno
        ]);
    }

    public function update(int $id, Request $request)
    {
        $aluno = Alunos::find($id);

        $aluno->update([
            'nome' => $request->nome,
            'email' => $request->email
        ]);
        return redirect('/alunos');
    }

    public function destroy(int $id)
    {
        $aluno = Alunos::find($id);

        $aluno->delete();

        return redirect('alunos');
    }
}
