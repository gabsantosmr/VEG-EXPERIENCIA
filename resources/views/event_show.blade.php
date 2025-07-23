@extends('layout.head_footer')

@section('title', $event->title)

@section('footer')
    <main class="pagina-news-container">
        <div class="evento-pagina-grid">

            <div class="evento-conteudo-principal">
                <img src="{{ asset('/img/events/' . $event->image) }}" alt="Banner do evento {{ $event->title }}" class="evento-detalhe-imagem" loading="lazy">
                
                <div class="evento-detalhe-descricao">
                    <h2>Sobre o Evento</h2>
                    <p>{!! nl2br(e($event->description)) !!}</p>
                </div>
            </div>

            <aside class="evento-sidebar">
                <div class="sidebar-box">
                    <h1>{{ $event->title }}</h1>
                
                    <ul class="evento-detalhe-info">
                        <li>
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <strong>Data do Evento:</strong>
                                <span>{{ date('d/m/Y', strtotime($event->date_event)) }}</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Inscrições até:</strong>
                                <span>{{ date('d/m/Y', strtotime($event->date_final)) }}</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Local:</strong>
                                <span>{{ $event->location }}</span>
                            </div>
                        </li>
                    </ul>

                    @php
                        $inscricaoEncerrada = strtotime($event->date_final) < strtotime(date('Y-m-d'));
                    @endphp

                    <form action="/event/inscrever/{{$event->id}}" method="POST" class="form-inscricao">
                        @csrf
                        <button type="submit" class="button"
                                class="btn btn--full {{ $inscricaoEncerrada ? 'btn--desativado' : 'btn--primario' }}" 
                                {{ $inscricaoEncerrada ? 'disabled' : '' }}>
                            {{ $inscricaoEncerrada ? 'Inscrições Encerradas' : 'Inscreva-se Agora' }}
                        </button>
                    </form>

                    <div class="bloco-compartilhar">
                        <strong>Compartilhe este evento:</strong>
                        <div class="links-compartilhar">
                            <a href="https://api.whatsapp.com/send?text=Confira%20este%20evento%3A%20{{ urlencode($event->title) }}%20{{ urlencode(Request::url()) }}" target="_blank" class="link-social" aria-label="Compartilhar no WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank" class="link-social" aria-label="Compartilhar no Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text=Confira%20este%20evento%3A%20{{ urlencode($event->title) }}" target="_blank" class="link-social" aria-label="Compartilhar no Twitter"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </main>
@endsection
