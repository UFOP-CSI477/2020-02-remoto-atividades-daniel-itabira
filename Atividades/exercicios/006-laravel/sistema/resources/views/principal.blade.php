<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <div class="container-fluid">

    <nav>
        <a></a>

        <ul>
            <li class="nav-item"><a href="{{route('principal')}}" class="nav link">Home</a></li>
            <li class="nav-item"><a href="{{route('estados.index')}}" class="nav link">Estados</a></li>
            <li class="nav-item"><a href="/" class="nav link">Cidades</a></li>
            <li class="nav-item"><a href="/" class="nav link">Vendas</a></li>
        </ul>
    </nav>

    @if(session('mensagem'))

        
    @endif

    @yield('conteudo')
    </div>
</body>
</html>