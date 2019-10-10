@extends('produtos.layout')
@section('content')
    <h2>Adicionar novo produto</h2>
    <a href="{{ route('produtos.index') }}">Volta para view index</a>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <strong>Nome do Produto:</strong>
        <input type="text" name="nome" placeholder="Nome do produto">
        <br><br>
        <strong>Valor do produto:</strong>
        <input type="text" name="valor" placeholder="100.55">
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection