@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus eventos</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        @if (count($events)>0)

        @else
            <p>você ainda não possui nenhum evento! <a href="/events/create">Crie um Evento</a></p>
        @endif

    </div>
@endsection
