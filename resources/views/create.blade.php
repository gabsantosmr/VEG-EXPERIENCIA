@extends('layout.head_footer')

@section('title', 'PAINEL ADMINISTRADOR')

@section('footer')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu eventos</h1>

        <form action="/event" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" class="form-control-file" id="image" name="image" />
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="NOME DO EVENTO" />
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
                <input type="text" class="form-control" id="location" name="location" placeholder="LOCALIZAÇÃO DO EVENTO" />
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <di class="form-group">
                <input type="submit" class="btn btm-primary" value="Criar Evento">
            </di>
        </form>
    </div>

@endsection
