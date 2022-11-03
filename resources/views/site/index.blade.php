@extends('layouts.site.site')

@section('titulo')
    Bella Papelaria
@endsection

@section('categorias')
    @if(isset($categorias))
        @foreach ($categorias as $categoria)
            <div class="index-categoria" key="{{ $categoria['categoria'] }}" style="border: 1px solid black;">
                <input type="button" value="{{ $categoria['categoria'] }}" onclick="searchProduct('{{ $categoria['id'] }}')">
            </div>
        @endforeach
    @endif
    <input type="button" value="Mostrar todos os produtos" onclick="showAllProducts()">
@endsection

@section('conteudos')

    @if(isset($produtos))
        @foreach ($produtos as $produto)
            <a href="{{ route('informacoes', $produto->id) }}" class="ver detalhes">
                <div class="index-product" key="{{ $produto['categoria_id'] }}" style="border: 1px solid black;">
                    <img src="/storage/{{ $produto->imagem }}" alt="Foto de {{ $produto['nome'] }}">
                    <p>{{ $produto['nome'] }}</p>
                    <p>{{ $produto['descricao'] }}</p>
                    <p>{{ $produto['preco'] }}</p>
                    @if ($produto['quantidade'] == 0)
                        <p>Não disponível</p>
                    @else
                        <p>{{ $produto['quantidade'] }}</p>
                    @endif
                    <p>{{ $produto->categoria->categoria }}</p>
                </div>
            </a>
        @endforeach
    @endif
    
@endsection



