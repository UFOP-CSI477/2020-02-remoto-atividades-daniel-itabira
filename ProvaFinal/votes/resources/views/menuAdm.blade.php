@extends('principal')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu administrativo') }}</div>
                <a href="{{route('registerProf')}}">Adicionar professor</a>
                <a href="{{route('temas.create')}}">Adicionar Temas</a>

                <div class="card-header">{{ __('Professores Registrados') }}

                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $e)
                            @if($e->type == 2)
                            <tr>
                                <td>{{$e->id}}</td>
                                <td>{{$e->name}}</td>
                                <td>{{$e->email}}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-header">{{ __('Temas Registrados') }}
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Descricão</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($temas as $e)
                            
                            <tr>
                                <td>{{$e->id}}</td>
                                <td>{{$e->descricao}}</td>
                                <td><a href="{{route('temas.edit', $e->id)}}">Editar</a></td>
                            </tr>
                           
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-header">{{ __('Lista de Votos') }}
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Ordem</th>
                                <th>Codigo</th>
                                <th>Codigo Professor</th>
                                <th>Nome Professor</th>
                                <th>Descricão</th>
                                <th>Opção de Voto</th>
                                <th>Data/Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($votos as $v)
                                <th>{{$v->ordem}}</th>
                                <th>{{$v->id}}</th>
                                <th>{{$v->user_id}}</th>
                                <th>Nome do Professor Implementar</th>
                                <th>Descricao implementar</th>
                                <th>{{$v->opcao}}</th>
                                <th>{{$v->data}}</th>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-header">{{ __('Votos por tema') }}
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Ordem</th>
                                <th>Codigo</th>
                                <th>Descrição</th>
                                <th>Cod - Nome Professor</th>
                                <th>Qtd</th>
                                <th>Porcentagem</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection