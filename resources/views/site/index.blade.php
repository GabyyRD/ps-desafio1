@extends('layouts.site.site')

@section('titulo')
    Bella Papelaria
@endsection



@section('conteudos')
    <section class="content">
        <h1>PRODUTOS</h1>
        <div id="area-principal">
            <aside id="categories">
                <h2>Pesquise por categorias:</h2>
                @if(isset($categorias))
                    @foreach ($categorias as $categoria)
                        <input type="button" value="{{ $categoria['categoria'] }}" onclick="searchProduct('{{ $categoria['id'] }}')" class="index-categories" key="{{ $categoria['categoria'] }}">
                    @endforeach
                @endif
                <input class="index-categories" type="button" value="Mostrar todos os produtos" onclick="showAllProducts()">
            </aside>
            <section id="index-card-section">
                @if(isset($produtos))
                    @foreach ($produtos as $produto)
                        <div class="index-product" key="{{ $produto['categoria_id'] }}">
                            <a href="{{ route('informacoes', $produto->id) }}">
                                <img src="/storage/{{ $produto->imagem }}" alt="Foto de {{ $produto['nome'] }}" id="product-image">
                                @if ($produto['quantidade'] == 0)
                                    <img src="{{ asset('site/img/tela-branca.jpeg') }}" alt="Indisponível" id="white-image">
                                @endif
                                <p>{{ $produto['nome'] }}</p>
                                @if ($produto['quantidade'] == 0)
                                    <p>Não disponível</p>
                                @else
                                    <p>Disponível: {{ $produto['quantidade'] }} unid</p>
                                @endif
                                <p id="price-product">R$ {{ $produto['preco'] }},00</p>
                            </a>
                        </div>
                    @endforeach
                @endif
                <!--<p class="indisponivel" >Não possuímos este produto no momento.</p>-->
            </section>
        </div>
    </section>
@endsection









