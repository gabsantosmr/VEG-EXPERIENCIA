@extends('layout.head_footer')

@section('title', 'EVENTOS')

@section('footer')

    <!-- Menu -->
    <nav id="nav-event">
        <!-- Logo da Veg Experience localizado no menu -->
        <a href="/ ">
            <img id="logo-menu" src="img/logo-veg.png" alt="logo da Veg Experience"/>
        </a>

        <!-- Navegação -->

        <div id="navegacao">
            <ul>
                @auth
                    <li><a href="/event">EVENTOS</a></li>
                    <li><a href="/dashboard">MEUS EVENTOS</a></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="logout-button">SAIR</button>
                    </form>
                @endauth 
                @guest
                    <li><a href="/login">ENTRAR</a></li>
                    <li><a href="/register">CADASTRAR</a></li>
                @endguest
               
            </ul>
        </div>
    </nav>

    <!-- Carrossel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrossel.jpg" class="d-block w-100" alt="Carrossel 1">
            </div>
            <div class="carousel-item">
                <img src="img/carrossel 2.jpg" class="d-block w-100" alt="Carrossel 2">
            </div>
            <div class="carousel-item">
                <img src="img/carrossel 3.jpg" class="d-block w-100" alt="Carrossel 3">
            </div>
        </div>
        <!-- Botões de controle -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <main>
        <div id="cabecalho-eventos">
            <h1>Eventos</h1>
            <div>
                <form action="/event" method="GET">
                    <input name="search" id="search" type="text" class="input-field" placeholder="PESQUISAR EVENTO">
                    <button type="submit" class="button" id="buttonsearch"><img id="searchimg" src="img/search.png" alt="Icone de lupa"></button>
                </form>
            </div>
        </div>
        @if (count($event) == 0)
            <p>Não há eventos disponíveis</p>
        @elseif ($search && count($event) == 0)
            <h3>Busca por:{{$search}}</h3>
            <p>Não foi possível encontrar nenhum evento com a pesquisa: {{ $search }}</p>
        @else
            <h3>Busca por:{{$search}}</h3>
            <p>Próximos eventos</p>    
        @endif
        <div class="card-container">
            @foreach ($event as $events)
                <div class="card">
                    <img src="{{ asset('img/events/' . $events->image) }}" alt="Imagem do evento">
                    <h3>{{ strtoupper($events->title) }}</h3>
                    <p>Data: {{date('d/m/y', strtotime($events->date_event))}}</p>
                    <p>Data: {{date('d/m/y', strtotime($events->date_final))}}</p>
                    <p>Local:{{$events->location}}</p>
                    <p>Descrição:{{ $events->description }}</p>
                    <a href="#" class="subscribe-btn">INSCREVA-SE</a>
                </div>
            @endforeach
        </div>

        @if (session('msg'))
            <p class="msg">{{session('msg')}}</p>
        @endif
    </main>
    <!-- Botão flutuante do whatsapp e instagram -->
    <div id="whatsapp-e-instagram">
		<a href="https://api.whatsapp.com/send?phone=5561981677132" target="_blank"><img id="botao-whatsapp" src="img/botao-whatsapp.png" alt="Ícone do Whatsapp" /></a>
        <a href="https://www.instagram.com/experience.veg/" target="_blank"><img id="botao-instagram" src="img/botao-instagram.png" alt="Ícone do instagram" /></a>
    </div>

@endsection
