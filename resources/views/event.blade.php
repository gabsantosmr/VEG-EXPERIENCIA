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
                    <h3>Veg Seminário</h3>
                    <div class="outrospebutton">
                        <p>24/10/2024</p>
                        <a class="button" href="https://www.sympla.com.br/evento/a-jornada-veg-pelas-pessoas/2432490?referrer=www.google.com">INSCREVA-SE</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/vegseminario.png" alt="">
                <div class="descricao2">
                    @foreach ($event as $events)
                        <p>{{$events ->title}}</p>
                    @endforeach
                    <h3>Veg Seminário</h3>
                    <div class="outrospebutton">
                        <p>24/10/2024</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                    <div>
                        @foreach ($event as $events)
                        <p>{{$events ->description}}</p>
                        @endforeach
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/pelosanimais.png" alt="">
                <div class="descricao2">
                    <h3>Veg Experience: A jornada - Pelos Animais</h3>
                    <div class="outrospebutton">
                        <p>21/09/2024</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/papelreciclado.jpg" alt="">
                <div class="descricao2">
                    <h3>Oficina de Papel Reciclado</h3>
                    <div class="outrospebutton">
                        <p>04/04/2024</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/pelaspessoas.jpg" alt="">
                <div class="descricao2">
                    <h3>Veg Experience: A jornada - Pelas Pessoas</h3>
                    <div class="outrospebutton">
                        <p>27/04/2024</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/meverao.jpg" alt="">
                <div class="descricao2">
                    <h3>Projeto MeVerão 2024</h3>
                    <div class="outrospebutton">
                        <p>12/2023 - 27/01/2024</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img id="floreser" src="img/flor&ser.jpg" alt="">
                <div class="descricao2">
                    <h3>Desfile Social Flor&Ser</h3>
                    <div class="outrospebutton">
                        <p>26/08/2023</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/desfilemodaconciente.jpg" alt="">
                <div class="descricao2">
                    <h3>Desfile de Moda Consciente</h3>
                    <div class="outrospebutton">
                        <p>27/05/2023</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/recriarelibertar.jpg" alt="">
                <div class="descricao2">
                    <h3>Oficina Recriar é Libertar</h3>
                    <div class="outrospebutton">
                        <p>21/05/2023</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li class="card">
                <img src="img/desfilesocial.jpg" alt="">
                <div class="descricao2">
                    <h3>Desfile Social #VegBem40</h3>
                    <div class="outrospebutton">
                        <p>20/05/2023</p>
                        <a class="button-desative">ENCERRADO</a>
                    </div>
                </div>
            </li>
            <li id="no-results">
                <p>Nenhum evento encontrado</p>
            </li>
        </ul>
    </main>
    <!-- Botão flutuante do whatsapp e instagram -->
    <div id="whatsapp-e-instagram">
		<a href="https://api.whatsapp.com/send?phone=5561981677132" target="_blank"><img id="botao-whatsapp" src="img/botao-whatsapp.png" alt="Ícone do Whatsapp" /></a>
        <a href="https://www.instagram.com/experience.veg/" target="_blank"><img id="botao-instagram" src="img/botao-instagram.png" alt="Ícone do instagram" /></a>
    </div>
    
@endsection
