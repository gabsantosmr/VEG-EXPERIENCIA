@extends('layout.head_footer')

@section('title', 'EVENTOS')

@section('footer')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu eventos</h1>

        <form action="/event" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="NOME DO EVENTO" />
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
