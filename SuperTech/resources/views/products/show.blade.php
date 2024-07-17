@extends('layouts.main')
@section('title', 'SuperTech - ' . $product->name)

@section('content')
    <div class="container">
        <div class="row" id="container-show">
            <div class="col-md-6" id="image-container-show">
                <img src="/img/events/{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <div class="col-md-6" id="desc-prod-show">
                <h2>{{ $product->name }}</h2>
                <p><strong>Preço:</strong> R$ {{ $product->price }}</p>
                <p><strong>Descrição:</strong> {{ $product->description }}</p>
                <button class="btn btn-primary">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
@endsection