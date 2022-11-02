@extends('layouts.site.site')

@section('titulo')
    Index
@endsection

@section('cont')
    @if(isset($categorias))
        @foreach ($categorias as $categoria)
            <div class="index-categoria" key="{{ $categoria['categoria'] }}" style="border: 1px solid black;">
                <input type="button" value="{{ $categoria['categoria'] }}" onclick="searchProduct('{{ $categoria['id'] }}')">
            </div>
        @endforeach
    @endif
@endsection

@section('conteudos')

    @if(isset($produtos))
        @foreach ($produtos as $produto)
            <div class="index-product" key="{{ $produto['categoria_id'] }}" style="border: 1px solid black;">
                <a href="{{ route('informacoes{id}') }}" class="">
                    <img src="/storage/{{ $produto->imagem }}" alt="Foto de {{ $produto['nome'] }}">
                    <p>{{ $produto['nome'] }}</p>
                    <p>{{ $produto['descricao'] }}</p>
                    <p>{{ $produto['preco'] }}</p>
                    @if ($produto['quantidade'] == 0)
                        <p>Não disponível</p>
                    @else
                        <p>{{ $produto['quantidade'] }}</p>
                    @endif
                    <p>{{ $produto['categoria_id']}}</p>
                </a>
            </div>
        @endforeach
    @endif
@endsection



