@extends('app')
@section('titulo', 'Editar Aluno')
@section('conteudo')
<br>
<h1>Editar Aluno</h1>
<form action="{{route('update',$aluno)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="Nome" class="form-label">Nome</label>
        <input type="text" value="{{ $aluno->nome }}" class="form-control" id="nome" name="nome" placeholder="Nome do Aluno" required>
    </div> 
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" value="{{ $aluno->email }}" class="form-control" id="email" name="email" placeholder="email@teste.com" required>
    </div>
    <div class="mb-3">
        <label for="RA" class="form-label">RA</label>
        <input type="numeric" value="{{ $aluno->ra }}" class="form-control" id="ra" name="ra" placeholder="00000000000000" required>
    </div>
    <div class="mb-3">
        <label for="CPF" class="form-label">CPF</label>
        <input type="numeric" value="{{ $aluno->cpf }}" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
    </div>
    
    <button class="btn btn-success" type="submit">Enviar</button>
</form>

@endsection