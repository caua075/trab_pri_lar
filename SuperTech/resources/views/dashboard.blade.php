@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')

    <div class="container mt-4">
        <h1>Bem-vindo à Dashboard</h1>
        <div class="row">
            @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="{{ asset('img/events/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection