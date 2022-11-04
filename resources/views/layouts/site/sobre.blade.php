<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Bella Papelaria</title>
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
        <h1 class="title">Seja bem-vindo!</h1>
        <div class="about">
            <div class="informacoes">
                <img src="{{ asset('site/img/caderno-lilas.jpeg') }}" alt="Produto da papelaria">
            </div>
            <div class="informacoes">
            <p class="" style="margin: 10%; font-size: 30px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque architecto hic recusandae quibusdam quis nobis voluptatibus, esse harum iusto, earum maxime natus eveniet eius facilis. Accusamus iusto ut dolor voluptas.</p></div>
        </div>
        <a href="{{ route('siteindex') }}" class=""><i class="fa-regular fa-chevrons-left"></i>   Voltar a tela inicial</a>
    </section>


    

    @include('layouts.site.footer')

    <script src="{{ asset("site/js/siteScripts.js") }}"></script>
</body>
</html>



