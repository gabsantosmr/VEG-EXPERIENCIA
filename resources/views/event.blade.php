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
                <input id="search" type="text" class="input-field" placeholder="PESQUISAR EVENTO">
                <a class="button" id="buttonsearch"><img id="searchimg" src="img/search.png" alt="Icone de lupa"></a>
            </div>
        </div>
        <ul class="outros" id="cards">
            <li class="card">
                <img src="img/vegseminario.png" alt="">
                <div class="descricao2">
                    @foreach ($event as $events)
                     <h3>{{$events ->title}}</h3>
                    <div class="outrospebutton">
                        <p>{{$events ->description}}</p>
                        <a class="button" href="https://www.sympla.com.br/evento/a-jornada-veg-pelas-pessoas/2432490?referrer=www.google.com">INSCREVA-SE</a>
                    </div>   
                    @endforeach
                    
                </div>
            </li>
        </ul>
    </main>
    <!-- Botão flutuante do whatsapp e instagram -->
    <div id="whatsapp-e-instagram">
		<a href="https://api.whatsapp.com/send?phone=5561981677132" target="_blank"><img id="botao-whatsapp" src="img/botao-whatsapp.png" alt="Ícone do Whatsapp" /></a>
        <a href="https://www.instagram.com/experience.veg/" target="_blank"><img id="botao-instagram" src="img/botao-instagram.png" alt="Ícone do instagram" /></a>
    </div>
    
@endsection
