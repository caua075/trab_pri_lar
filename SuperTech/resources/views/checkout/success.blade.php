@extends('layouts.main')
@section('title', 'Compra Finalizada')

@section('content')
    <div class="container">
        <h1>Compra Finalizada</h1>
        <div class="alert alert-success">
            <p>Sua compra foi finalizada com sucesso!</p>
        </div>
        <p>Você será redirecionado para o formulário de feedback em <span id="countdown">10</span> segundos.</p>
    </div>

    <script>
        function countdown() {
            var seconds = 10; // Tempo em segundos
            var countdownElement = document.getElementById('countdown');

            var timer = setInterval(function() {
                seconds--;
                countdownElement.textContent = seconds;

                if (seconds <= 0) {
                    clearInterval(timer);
                    window.location.href = "";
                }
            }, 1000); // 1000 milissegundos = 1 segundo
        }

        countdown();
    </script>
@endsection
