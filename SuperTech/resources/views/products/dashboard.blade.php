@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')

    <div class="container mt-4">
        <h1>Bem-vindo à Dashboard</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <a href="/products/{{ $product->id }}" class="text-decoration-none">
                        <div class="card">
                            <div class="zoom">
                                <img src="/img/events/{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">R${{ $product->price }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection