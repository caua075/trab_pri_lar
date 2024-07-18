@extends('layouts.main')
@section('title', 'Carrinho de Compras')

@section('content')
    <div class="container">
        <h1>Carrinho de Compras</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($cart)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Total</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @foreach($cart as $id => $item)
                        @php $total += $item['price'] * $item['quantity'] @endphp
                        <tr>
                            <td>
                                <img src="/img/events/{{ $item['image'] }}" alt="{{ $item['name'] }}" class="img-thumbnail" style="width: 50px; height: 50px;">
                            </td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>R$ {{ number_format($item['price'], 2, ',', '.') }}</td>
                            <td>R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</td>
                            <td>
                                <a href="/remove-from-cart/{{ $id }}" class="btn btn-danger">Remover</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <h4>Total: R$ {{ number_format($total, 2, ',', '.') }}</h4>
            </div>
            <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="payment_method" class="form-label">Método de Pagamento</label>
                    <select class="form-control" id="payment_method" name="payment_method" required>
                        <option value="credit_card">Cartão de Crédito</option>
                        <option value="pix">Pix</option>
                        <option value="ticket">Boleto</option>
                        <option value="debit_card">Cartão de Débito</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Finalizar Compra</button>
            </form>
        @else
            <p>Seu carrinho está vazio!</p>
        @endif
    </div>
@endsection
