@extends('principal')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Criar tema:') }}</div>
                <form action="{{route('votos.store')}}" method="post" id="criarVoto">

                    <div class="form-group">
                        <label for="descricao">Descrição do tema</label>
                        <input type="text" class="form-control" name="descricao" id="descricao">
                    </div>
                    <div class="form-group">
                        <label for="ordem">Ordem:</label> 
                    </div>
                    <div class="text-right">
                        <input type="submit" value="Criar Tema" class="btn btn-primary">
                        <input type="reset" value="Limpar Tema" class="btn btn-danger">
                    </div>
                    
                </form>
                <a href="{{route('menuAdm')}}">Voltar</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection