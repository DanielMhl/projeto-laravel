@extends('layouts.default')

@section('title','Departamentos')


@section('conteudo')
    <h1>Cargos</h1>
        <a href="{{ route('cargos.create') }}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-plus"></i></a>
    <table class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
            <tr>
                <td class="align-middle">{{ $cargo->id }}</td>
                <td class="align-middle">{{ $cargo->descricao }}</td>
                <td class="align-middle">
                    <button class="bg-primary m-2 rounded-1" ><i class="bi bi-pen"></i></button>
                    <i class="container bg-danger p-2 rounded-1 bi bi-trash3"></i>
                <td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection