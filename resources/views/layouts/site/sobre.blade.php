<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('site/CSS/site.css') }}" type="text/css">
    <style>
        .sobre {
            border: 1 px solid black;
            width: 80%;
}
    </style>
</head>
<body>
    @include('layouts.site.header')

    <h1 class="">OIIII</h1>

    
    <div class="sobre" style="border: 1px solid black; width: 80%; display:flex; flex-direction: row; margin: 20vh auto; height: 100vh;">
        <div class="informacoes" style="border: 1px solid black; width:50%; display: flex; justify-content: center; align-items: center">
            <img src="{{ asset('site/img/caderno-lilas.jpeg') }}" alt="" style="height: 80%">
        </div>
        <div class="informacoes" style="border: 1px solid black; width: 50%; display: flex; justify-content: center; align-items: center">
        <p class="" style="margin: 10%; font-size: 30px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque architecto hic recusandae quibusdam quis nobis voluptatibus, esse harum iusto, earum maxime natus eveniet eius facilis. Accusamus iusto ut dolor voluptas.</p></div>
    </div>
    <a href="{{ route('siteindex') }}" class="">voltar a tela inicial</a>

    

    @include('layouts.site.footer')

    <script src="{{ asset("site/js/siteScripts.js") }}"></script>
</body>
</html>



