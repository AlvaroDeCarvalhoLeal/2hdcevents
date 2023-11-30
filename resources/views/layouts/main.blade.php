<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- o titulo eh passado quando chama essa pagina main -->
        <title>@yield('title')</title>

        <!-- fonte do google -->
        <style>
         @import url('https://fonts.googleapis.com/css2?family=Roboto');
        </style>

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- linkando o css -->
        <link rel="stylesheet" href="/css/styles.css">
        <!-- linkando o js -->
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <!-- barra de navegacao -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <!-- para saber se veio alguma mensagem -->
                @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif
                <!-- conteudo da pagina -->
                @yield('content')

            </div>

        </div>

    </main>
    <footer>
    <ion-icon name="american-football-outline"></ion-icon>
    <p></p>
    <ion-icon name="bicycle-outline"></ion-icon>
    <p>HDC Events &copy; 2023</p>
    </footer>
    <!-- importar os icones -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
