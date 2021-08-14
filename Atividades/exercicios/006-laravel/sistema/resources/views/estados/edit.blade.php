@extends('principal')

@section('conteudo')

<form action="{{route('estados.update', $estado->id)}}" method="post">

    @csrf
    @method('PUT')
    
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{$estado->nome}}"> 
    </div>
    <div>
        <label for="nome">Sigla</label>
        <input type="text" name="sigla" id="sigla" value="{{$estado->sigla}}">
    </div>
    <div>
        <input type="submit" value="Atualizar">
        <input type="reset" value="Limpar">
    </div>

</form>

@endsection