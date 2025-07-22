@extends('layout.head_footer')

@section('title', 'Editado ' . $event->title)

@section('footer')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{$event->title}}</h1>

        <form action="/event/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" class="form-control-file" id="image" name="image" />
                <img src="/img/events/{{$event->image}}" class="img-preview" style="max-width: 300px;" alt="Prévia da imagem">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="NOME DO EVENTO" value="{{$event->title}}"/>
            </div>
            <div class="form-group">
                <label for="date_event">Data do evento:</label>
                <input type="date" class="form-control" id="date_event" name="date_event" value="{{$event->date_event}}"/>
            </div>
            <div class="form-group">
                <label for="date_final">Data da inscrição:</label>
                <input type="date" class="form-control" id="date_final" name="date_final" value="{{$event->date_final}}"/>
            </div>
            <div class="form-group">
                <label for="location">Local:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="LOCALIZAÇÃO DO EVENTO" value="{{$event->location}}"/>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" >{{$event->description}}</textarea>
            </div>
            <di class="form-group">
                <input type="submit" class="btn btm-primary" value="EDITAR EVENTO">
            </di>
        </form>
    </div>

@endsection
