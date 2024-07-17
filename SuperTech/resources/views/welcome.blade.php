@extends('layouts.main')

@section('title', 'SuperTech')

@section('content')
    <main>
        <div class="container">
            <div id="desc-page">
                <h1>Bem-vindo à SuperTech!</h1>
                <p>Na <strong>SuperTech</strong>, você encontra os melhores componentes de informática para montar, atualizar e personalizar seu PC. Oferecemos uma ampla variedade de produtos de alta performance, periféricos de qualidade, soluções de armazenamento e equipamentos de rede.</p>

                <p>Trabalhamos com as marcas mais renomadas do mercado para garantir qualidade e preços competitivos. Nossa equipe está pronta para oferecer suporte especializado, desde a escolha dos produtos até a assistência técnica.</p>

                <p><strong>Descubra a tecnologia ao seu alcance na SuperTech!</strong></p>

                <a href="/about" class="btn btn-primary">Saiba Mais</a>
            </div>
            
            <h2>Produtos em Destaque</h2>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/img/logo.png" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">R${{ $product->price }}</p>
                                <a href="#" class="btn btn-primary">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection