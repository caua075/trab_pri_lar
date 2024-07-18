<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect('/carrinho-compras')->with('error', 'Seu carrinho está vazio!');
        }

        // Processar a compra e pagamento aqui...
        // Exemplo: salvar pedido no banco de dados, processar pagamento via API, etc.

        // Limpar o carrinho após a compra
        session()->forget('cart');

        return redirect('/checkout')->with('success', 'Compra finalizada com sucesso!');
    }

    public function checkoutPage()
    {
        return view('checkout.success');
    }
}
