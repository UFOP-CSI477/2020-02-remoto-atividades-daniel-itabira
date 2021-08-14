@extends('principal')

@section('conteudo')

<form action="{{route('estados.store')}}" method="post">

    @csrf
    
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="nome">Sigla</label>
        <input type="text" name="sigla" id="sigla">
    </div>
    <div>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </div>

</form>

@endsection