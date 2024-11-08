@extends('layouts.app')

@section('title', 'Lista de Livros')

@section('content')
    <h1>Lista de Livros</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Resumo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->titulo }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->ano_publicacao }}</td>
                    <td>{{ $livro->resumo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection