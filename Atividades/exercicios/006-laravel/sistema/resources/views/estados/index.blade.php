@extends('principal')

@section('conteudo')
    <a href="{{route('estados.create')}}">Cadastrar</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estados as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nome }}</td>
                    <td>{{ $e->sigla }}</td>
                    <td><a href="{{route('estados.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection 