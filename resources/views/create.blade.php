@extends('layout.head_footer')

@section('title', 'Criar novo evento')

@section('footer')

    <!-- Menu -->
    <nav id="nav-admin">
        <!-- Logo da Veg Experience localizado no menu -->
        <a href="/ ">
            <img id="logo-menu" src="/img/logo-veg-colorida.webp" alt="logo da Veg Experience"/>
        </a>

        <!-- Navegação -->

        <div id="navegacao">
            <ul>
                    <li><a href="/dashboard">MEUS EVENTOS</a></li>
                    <li><a href="/event">EVENTOS</a></li>
            </ul>
        </div>
    </nav>

    <main class="pagina-create-container">
        <div id="event-create-container" class="col-md-6 offset-md-3">
            <h1>Crie o seu evento</h1>
            <p class="subtitulo-form">Preencha as informações abaixo para adicionar um novo evento ao site.</p>

            <form action="/event" method="POST" enctype="multipart/form-data" class="form-moderno">
                @csrf
                <div class="form-group">
                    <label for="image">Imagem de capa do evento:</label>
                    <input type="file" class="form-control-file" id="image" name="image" required/>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="title">Evento:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" />
                    </div>
                    <div class="form-group">
                        <label for="date_event">Data do evento:</label>
                        <input type="date" class="form-control" id="date_event" name="date_event"/>
                    </div>
                    <div class="form-group">
                        <label for="date_final">Data da inscrição:</label>
                        <input type="date" class="form-control" id="date_final" name="date_final" />
                    </div>
                    <div class="form-group">
                        <label for="location">Local:</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Localização do evento" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btm-primary" value="Criar Evento">
                </div>
            </form>
        </div>
    </main>

@endsection
