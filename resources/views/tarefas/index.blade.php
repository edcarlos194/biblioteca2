@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
    <h1>Lista de Tarefas</h1>
    <a href="{{ route('tarefas.create') }}" class="btn btn-primary mb-3">Adicionar Nova Tarefa</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->titulo }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhuma tarefa encontrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
