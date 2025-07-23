@extends('layout.head_footer')

@section('title', 'EVENTOS')

@section('footer')

    <!-- Menu -->
    <nav id="nav-event">
        <!-- Logo da Veg Experience localizado no menu -->
        <a href="/ ">
            <img id="logo-menu" src="/img/logo-veg-colorida.webp" alt="logo da Veg Experience"/>
        </a>

        <!-- Navegação -->

        <div id="navegacao">
            <ul>
                @auth
                    <li><a class="a-menu" href="/event">EVENTOS</a></li>
                    <li><a class="a-menu" href="/dashboard">MEUS EVENTOS</a></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="button">SAIR</button>
                    </form>
                @endauth 
                @guest
                    <li><a class="a-menu" href="/login">ENTRAR</a></li>
                    <li><a class="a-menu" href="/register">CADASTRAR</a></li>
                @endguest
               
            </ul>
        </div>
    </nav>

    <!-- Carrossel -->
    <section class="carrossel-hero">

    <div class="carrossel-track-container">
        <div class="carrossel-track">
            <div class="carrossel-slide">
                <img src="/img/carrossel.jpg" alt="Descrição da imagem do evento 1">
            </div>
            <div class="carrossel-slide">
                <img src="/img/carrossel 2.jpg" alt="Descrição da imagem do evento 2">
            </div>
            <div class="carrossel-slide">
                <img src="/img/carrossel 3.jpg" alt="Descrição da imagem do evento 3">
            </div>
        </div>
    </div>

    <button class="carrossel-btn carrossel-btn--prev" aria-label="Slide Anterior">
        <img src="/img/arrow-back-carrossel.svg" alt="Seta para a esquerda">
    </button>
    <button class="carrossel-btn carrossel-btn--next" aria-label="Próximo Slide">
        <img src="/img/arrow-forward-carrossel.svg" alt="Seta para a direita">
    </button>

</section>


    <div id="cabecalho-eventos">
        <h1>Eventos</h1>
        <div>
            <form action="/event" method="GET" class="form-pesquisa">
                <input name="search" id="search" type="text" class="input-field" placeholder="Pesquisar por nome ou tema...">
                <button type="submit" class="button" id="buttonsearch"><img src="/img/search.png" alt="Icone de lupa"></button>
            </form>
        </div>
    </div>

    <main>
        @if (count($event) == 0)
            <p>Não há eventos disponíveis</p>
        @elseif ($search && count($event) == 0)
            <h3>Busca por:{{$search}}</h3>
            <p>Não foi possível encontrar nenhum evento com a pesquisa: {{ $search }}</p>
        @else
            <h3>Busca por:{{$search}}</h3>
            <p>Próximos eventos</p>    
        @endif

        <div class="eventos-grid">
            @foreach ($event as $events)
                <a href="/eventos/{{ $events->id }}" class="evento-card">
                    
                    <img class="evento-card__imagem" src="{{ asset('/img/events/' . $events->image) }}" alt="Banner do evento {{ $events->title }}">
                    
                    <div class="evento-card__conteudo">
                        
                        <h3>{{ $events->title }}</h3>

                        <div class="evento-card__info">
                            <div class="info-item">
                                <strong>Data do Evento:</strong>
                                <span>{{ date('d/m/Y', strtotime($events->date_event)) }}</span>
                            </div>
                            <div class="info-item">
                                <strong>Inscrições até:</strong>
                                <span>{{ date('d/m/Y', strtotime($events->date_final)) }}</span>
                            </div>
                            <div class="info-item">
                                <strong>Local:</strong>
                                <span>{{ $events->location }}</span>
                            </div>
                        </div>

                        <p class="evento-card__descricao">{{ $events->description }}</p>
                        

                        <!-- <span class="btn btn--primario">Ver Detalhes</span> -->
                        @php
                            $inscricaoEncerrada = strtotime($events->date_final) < strtotime(date('Y-m-d'));
                        @endphp
                        <form action="/event/inscrever/{{$events->id}}" method="POST">
                            @csrf
                            <button type="submit" class="button{{ $inscricaoEncerrada ? ' button-desative' : '' }}" id="event-submit" {{ $inscricaoEncerrada ? 'disabled' : '' }}>INSCREVA-SE</button>
                        </form>
                    </div>
                </a>
            @endforeach
        </div>

        @if (session('msg'))
            <p class="msg">{{session('msg')}}</p>
        @endif
    </main>
    <!-- Botão flutuante do whatsapp e instagram -->
    <div id="whatsapp-e-instagram">
        <a href="https://api.whatsapp.com/send?phone=5561981677132" target="_blank"><img id="botao-whatsapp" src="/img/botao-whatsapp.png" alt="Ícone do Whatsapp" /></a>
        <a href="https://www.instagram.com/experience.veg/" target="_blank"><img id="botao-instagram" src="/img/botao-instagram.png" alt="Ícone do instagram" /></a>
    </div>

@endsection
