@extends('principal')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Area do professor')}}</div>
                <p>Id de professor: {{$usuario->id}}</p>
                <p>Nome do professor: {{$usuario->name}}</p>
                <div class="card-header">{{ __('Temas para votação') }}
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Votar</th>
                                <th>Descricão do Tema</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($temas as $e)
                            <tr>
                                <td><a href="{{route('votos.create', $e->id)}}">Votar no Tema</a></td>
                                <td>{{$e->descricao}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-header">{{ __('Votados por mim') }}
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Ordem</th>
                                <th>Id</th>
                                <th>Descricão do Tema</th>
                                <th>Opção de Voto</th>
                                <th>Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($votos as $e)
                            @if($e->user_id == $usuario->id)
                            <tr>
                                <td>{{$e->ordem}}</td>
                                <td>{{$e->id}}</td>
                                <td>{{$e->descricao}}</td>
                                <td>{{$e->voto->opcao}}</td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


@endsection