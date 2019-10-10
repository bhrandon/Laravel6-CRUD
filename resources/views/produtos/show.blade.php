@extends('produtos.layout')
@section('content')
    <h2> Mostrar detalhes do produto</h2>
    <a href="{{ route('produtos.index') }}"> Voltar para view index</a>
    <hr>
    <strong>Nome do produto:</strong>
    {{ $produto->nome }}
    <br><br>
    <strong>Valor do produto:</strong>
    R$ {{ $produto->valor }}
@endsection