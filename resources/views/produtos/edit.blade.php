@extends('produtos.layout')
@section('content')
    <h2>Editar Produto</h2>
    <a  href="{{ route('produtos.index') }}"> Voltar para view index</a>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <strong>Nome do produto:</strong>
        <input type="text" name="nome" value="{{ $produto->nome }}" placeholder="Nome do produto">
        <br><br>
        <strong>Valor do produto:</strong>
        <input type="text" name="valor" value="{{ $produto->valor }}" placeholder="100.65">
        <br>
        <button type="submit">Editar Produto</button>
    </form>
@endsection