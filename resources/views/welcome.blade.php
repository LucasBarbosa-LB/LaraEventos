
@extends('layouts.main')

@section('title', 'Alta Eventos')

@section('content')

    <div id="search-container" class="col-md-12">

        <h1> Busque seu Eventos </h1>
            <form action="submit">
                <input  type="text"
                        id="search"
                        name="search"
                        class="form-control"
                        placeholder="Procurar"
                >
            </form>
    </div>

    <div id="events-container" class="col-sm-12">
        <h2>Proximos Eventos</h2>
            <p class="subtitle">Veja os Eventos dos proximos dias</p>

        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/evento.jpg" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">10/09/2020</p>
                        <h5 class="card-title"> {{ $event->title }}</h5>
                        <p class="card-participants"> x Participantes </p>
                        <a href="/events/{{$event->id}} " class="btn btn-primary" >Saber mais</a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
