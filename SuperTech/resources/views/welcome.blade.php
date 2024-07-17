@extends('layouts.main')

@section('title', 'SuperTech')

@section('content')
    <div class="container">
        <div class="row" id="desc-page">
            <h1>Bem-vindo à SuperTech!</h1>
            <p>Na <strong>SuperTech</strong>, você encontra os melhores componentes de informática para montar, atualizar e personalizar seu PC. Oferecemos uma ampla variedade de produtos de alta performance, periféricos de qualidade, soluções de armazenamento e equipamentos de rede.</p>
            <p>Trabalhamos com as marcas mais renomadas do mercado para garantir qualidade e preços competitivos. Nossa equipe está pronta para oferecer suporte especializado, desde a escolha dos produtos até a assistência técnica.</p>
            <p><strong>Descubra a tecnologia ao seu alcance na SuperTech!</strong></p>
        </div>
            <a href="/about" class="btn btn-primary">Saiba Mais</a>
        <div class="row cta-container">
            <h2>Descubra nossa seleção de alta tecnologia em equipamentos de informática!</h2>
            <ul id="prods" class="row">
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>HD's</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Placas de vídeo</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Memórias RAM</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Monitores</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Processadores</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Placas-mãe</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Fontes de alimentação</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Gabinetes</li>
                <li class="list-group-item h5"><ion-icon name="chevron-forward-outline"></ion-icon>Entre outros</li>
            </ul>
        </div>
            <a href="#prod-dest" class="cta-button btn btn-primary">Veja nossos produtos</a>
        
        <h2 id="prod-dest">Produtos em Destaque</h2>
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
@endsection