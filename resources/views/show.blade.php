@extends('app')
@section('titulo', 'Detalhes do Aluno')
@section('conteudo')
<br>
<div class="card">
    <div class="card-header">Detalhes do Aluno: {{$aluno->nome}}</div>
    <div class="card-body">
        <P><strong>ID:</strong> {{ $aluno->id }} </P>
        <P><strong>Nome:</strong> {{ $aluno->nome }} </P>
        <P><strong>Email:</strong> {{ $aluno->email }} </P>
        <P><strong>Registro Acadêmico:</strong> {{ $aluno->ra }} </P>
        <P><strong>CPF:</strong> {{ $aluno->cpf }} </P>
        <br>
        <a class="btn btn-success" href="{{route('index')}}">Voltar para lista</a>
    </div>
</div>
@endsection