@extends('app')
@section('titulo', 'Lista de Alunos')
@section('conteudo')
<br>
<h1>Lista de Alunos</h1>
<table class="table">
    <thead>
        <tr class="table-success">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Registro Acadêmico</th>
            <th scope="col">CPF</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alunos as $aluno)
        <tr class="table-info">
            <th scope="row">{{ $aluno->id }}</th>
            <td><a href="{{ route('show',$aluno)}}">{{ $aluno->nome }}</a></td>
            <td>{{ $aluno->email }}</td>
            <td>{{ $aluno->ra }}</td>
            <td>{{ $aluno->cpf }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('edit',$aluno)}}">Atualizar</a>
                <form action="{{ route('destroy',$aluno)}}" method="POST" style="display: inline;">
                    @method("DELETE")
                    @csrf
                    <button class="btn btn-danger" type="submit" 
                    onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-success" href="{{route('create')}}">Novo Aluno</a>
@endsection