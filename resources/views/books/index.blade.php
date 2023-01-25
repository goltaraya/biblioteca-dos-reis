@extends('layout.main')
@section('title', 'Livros')
@section('content')

    <div class="page-header">
        <h1>Livros</h1>
        <p>Abaixo, veja os livros disponíveis para serem alugados.</p>
    </div>


    <div class="books-table">
        @if (count($livros) == 0)
            <p>Aparentemente não existem livros cadastrados. Clique no botão abaixo para adicionar.</p>
        @else
            <table class="table">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Nº de Registro</th>
                    <th scope="col">Situação</th>
                </thead>
                <tbody>
                    @foreach ($livros as $livro)
                        <tr>
                            <th scope="row">{{ $livro->id }}</th>
                            <td> {{ $livro->title }} </td>
                            <td> {{ $livro->author }} </td>
                            <td> {{ $livro->genre }} </td>
                            <td> {{ $livro->registration_number }} </td>
                            <td> {{ $livro->situation }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <a class="btn btn-primary" href="/livros/criar">Adicionar</a>
    </div>
@endsection
