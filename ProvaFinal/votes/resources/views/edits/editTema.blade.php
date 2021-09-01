@extends('principal')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Criar tema:') }}</div>
                <form action="{{route('temas.update', $tema->id)}}" method="post" id="criarTema">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="descricao">Descrição do tema</label>
                        <input type="text" class="form-control" name="descricao" id="descricao"
                            value="{{$tema->descricao}}">
                    </div>
                    <div class="form-group">
                        <label for="ordem">Ordem:</label>
                        <input type="number" id="ordem" name="ordem" min="1" max="100" value="{{$tema->ordem}}">
                    </div>
                    <div class="text-right">
                        <input type="submit" value="Atualizar" class="btn btn-primary">
                        <input type="reset" value="Limpar Tema" class="btn btn-danger">
                    </div>
                </form>

                <div>

                    <form class="form-group" name="formDelete" action="{{route('temas.destroy', $tema->id)}}"
                        method="post" onsubmit="return confirm('Confirma a exclusão?'); ">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Excluir Tema" class="btn btn-danger">
                    </form>

                </div>
                <a href="{{route('menuAdm')}}">Voltar</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection