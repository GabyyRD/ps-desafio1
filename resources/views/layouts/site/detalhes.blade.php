<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('site/css/site.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    @include('layouts.site.header')


    <p>{{ $produto['nome'] }}</p>
    <p>{{ $produto['descricao'] }}</p>
    <p>{{ $produto['preco'] }}</p>
    @if ($produto['quantidade'] == 0)
        <p>Não disponível</p>
    @else
        <p>{{ $produto['quantidade'] }}</p>
    @endif
    <p>{{ $produto->categoria->categoria }}</p>
    <a href="{{ route('siteindex') }}" class="">voltar a tela inicial</a>


    @include('layouts.site.footer')

    <script src="{{ asset("site/js/siteScripts.js") }}"></script>
</body>
</html>