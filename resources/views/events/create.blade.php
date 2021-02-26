
@extends('layouts.main')

@section('title', 'Crie um Novo Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um Novo Evento</h1>
            <form action="/events" method="post">
            @csrf
                {{-- input de nome do evento --}}
                <div class="form-group">
                    <label for="title">Evento:</label>
                        <input  type="text"
                                class="form-control"
                                id="title"
                                name="title"
                                placeholder="Nome do Evento"
                        >
                </div>

            {{-- input de Descrição --}}
                <div class="form-group">
                    <label for="title">Cidade:</label>
                        <input  id="city"
                                name="city"
                                class="form-control"
                                type="text"
                                placeholder="Local do Evento"
                        >
                </div>

            {{-- input de Privacidade --}}
                <div class="form-group">
                    <label for="title">O evento é Privado ?</label>
                        <select id="private" name="private" class="form-control">
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                </div>

            {{-- input de descricao de evento --}}
                <div class="form-group">
                    <label for="title">Descrição:</label>
                        <textarea
                            name="description"
                            id="description"
                            class="form-control"
                            placeholder="Descreva como será o evento">
                        </textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Criar Evento">
            </form>
    </div>
@endsection
