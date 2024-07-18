<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-logo">
                            <img src="/img/logoS.svg" alt="SuperTech Logo"><span class="nav-item">Super Tech</span>
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/products/create">Cadastro de Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/carrinho-compras"><ion-icon name="cart-outline"></ion-icon></a>
                            </li>
                        </ul>
                        <form class="d-flex p-3" action="/#prod-dest" method="GET">
                            <input class="form-control me-2" type="text" name="search" id="search" placeholder="Procurar por ...">
                            <button class="btn btn-outline-primary" type="submit">Buscar</button>
                        </form>
                    </div>
                </nav>
            </header>
            
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @if(session('msg'))
                            <p class="msg">{{ session('msg') }}</p>
                        @endif
                    </div>
                    @yield('content')
                </div>
            </main>

            <footer>
                <p>&copy; 2024 SuperTech. Todos os direitos reservados.</p>
            </footer>
        </div>
    </body>
    <!-- JS da Aplicação -->
    <script src="/js/script.js"></script>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>

