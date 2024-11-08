@extends('layouts.app')

@section('title', 'Adicionar Livro')

@section('content')
    <h1>Adicionar Livro</h1>
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
            <input type="number" name="ano_publicacao" id="ano_publicacao" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="resumo" class="form-label">Resumo</label>
            <textarea name="resumo" id="resumo" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection   