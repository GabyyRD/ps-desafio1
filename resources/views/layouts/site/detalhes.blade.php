<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informações</title>
        <link rel="stylesheet" href="{{asset('site/css/site.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/47c5567752.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('layouts.site.header')

        <section class="content">
            <h1 class="title">Informações do produto</h1>
            <div class="details">
                <img src="/storage/{{ $produto->imagem }}" alt="Foto de {{ $produto['nome'] }}" id="product-image">
                <div id="details-table">
                    <p>{{ $produto['nome'] }}</p>
                    <p>DESCRIÇÃO: {{ $produto['descricao'] }}</p>
                    <p>VALOR: R$ {{ $produto['preco'] }},00</p>
                    @if ($produto['quantidade'] == 0)
                        <p>Não disponível</p>
                    @else
                        <p>QUANTIDADE: {{ $produto['quantidade'] }} unid.</p>
                    @endif
                    <p>CATEGORIA: {{ $produto->categoria->categoria }}</p>
                </div>
                <a href="{{ route('siteindex') }}" class="">Voltar à tela inicial</a>
            </div>
        </section>


        @include('layouts.site.footer')

        <script src="{{ asset("site/js/siteScripts.js") }}"></script>
    </body>
</html>