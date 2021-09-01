@extends('principal')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Votar') }}</div>
                <form action="{{route('votos.store')}}" method="post" id="criarVoto">
                    @csrf
                    <div class="form-group">

                        <label for="nome">Nome: </label>

                        <label for="ordem">Ordem:</label>
                        <select clas="form-control "name="ordem" id="ordem" form="criarVoto">
                            <option value="1">Favoravel</option>
                            <option value="2">Contrário</option>
                            <option value="3">Abstenção</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <input type="submit" value="Votar" class="btn btn-primary">
                        <input type="reset" value="Limpar Voto" class="btn btn-danger">
                    </div>
                </form>
                <a href="{{route('menuProf')}}">Voltar</a>
            </div>
        </div>
    </div>
</div>
</div>







@endsection