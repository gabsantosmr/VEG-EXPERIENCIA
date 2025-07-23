<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard - Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Eventos</h3>

                <div class="overflow-x-auto">
                    <table class="w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-100 text-left">
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Título</th>
                                <th class="px-4 py-2">Data</th>
                                <th class="px-4 py-2">Local</th>
                                <th class="px-4 py-2">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event as $events)
                                <tr class="border-t">
                                    <td scropt="row">{{$loop->index + 1}}</td>
                                    <td class="px-4 py-2">{{ $events ->title }}</td>
                                    <td class="px-4 py-2">{{date('d/m/y', strtotime($events->date_event))}}</td>
                                    <td class="px-4 py-2">{{ $events ->location }}</td>
                                    <td class="px-4 py-2">
                                        <a href="/event/edit/{{$events->id}}" class="btn btn-info edit-btn" target="_blank">EDITAR</a>
                                        <form action="/event/{{$events ->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">DELETAR</button>
                                        </form>
                                    </td>
                                </tr>
                            @if ($loop->last && count($event) == 0)
                            <tr>
                                    <td colspan="4" class="px-4 py-2 text-center">Nenhum evento encontrado.</td>
                                </tr>
                            @endif                                         
                                
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
            @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
        </div>
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">Partipação</h3>

                <div class="overflow-x-auto">
                    
                    <table class="w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-100 text-left">
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">Nome</th>
                                <th class="px-4 py-2">Participantes</th>
                                <th class="px-4 py-2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event as $events)
                            @if (count($events ->users) > 0)
                            <tr class="border-t">
                                <td scropt="row">{{$loop->index + 1}}</td>
                                <td class="px-4 py-2">{{ $events ->title }}</td>
                                <td class="px-4 py-2">{{count($events ->users)}}</td>
                                <td class="px-4 py-2">
                                    <form action="/event/exit/{{$events ->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">SAIR DO EVENTO</button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @if ($loop->last && count($event) == 0)
                            <tr>
                                <td colspan="4" class="px-4 py-2 text-center">Nenhum evento encontrado.</td>
                            </tr>
                            @endif                                         
                            
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
            @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
        </div>
    </div>
   
    

    
</x-app-layout>
