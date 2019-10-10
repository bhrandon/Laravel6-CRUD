@extends('produtos.layout')
@section('content')
    <h2>Laravel 6.0 CRUD Exemplo</h2>
    <a href="{{ route('produtos.create') }}">Novo produto</a>
    <hr>
    @if ($messagem = Session::get('sucesso'))
        <p>{{ $messagem }}</p>
    @endif
    <table>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
    @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->valor }}</td>
            <td>
                <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">
                    <a href="{{ route('produtos.show',$produto->id) }}">Mostrar</a>
                    <a href="{{ route('produtos.edit',$produto->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit"s>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection