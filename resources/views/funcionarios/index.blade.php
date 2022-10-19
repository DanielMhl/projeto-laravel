@extends('layouts.default')

@section('title','Funcionários')


@section('conteudo')
<div class="container bg-light p-3 rounded-2">
    <h1>Funcionários</h1>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4  mr-5""><i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargos</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr>
                <td class="align-middle">{{ $funcionario->id }}</td>
                <td class="align-middle"><img src="/images/funcionarios/{{ $funcionario->foto }}" alt="{{ $funcionario->nome }}" width="80"></td>
                <td class="align-middle">{{ $funcionario->nome}}</td>
                <td class="align-middle">{{ $funcionario->cargo->descricao }}</td>
                <td class="align-middle">{{ $funcionario->departamento->nome }}</td>
                <td class="align-middle">
                    <button class="bg-primary m-2 rounded-1" ><i class="bi bi-pen"></i></button>
                    <i class="container bg-danger p-2 rounded-1 bi bi-trash3"></i>
                <td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection