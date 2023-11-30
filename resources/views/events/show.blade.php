<!-- esta estendendo do /layouts/main.blade.php -->
@extends('layouts.main')
<!-- esta passando o nome do titulo para a main.blade.php -->
@section('title', $event->title)
<!-- comeca o conteudo que vai ficar antes e depois do corpo da pagina -->
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/events/{{$event->image}}" class="image-fluid" alt="{{$event->title}}">

        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->title}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
            <p class="event-participants"><ion-icon name="people-outline"></ion-icon>X participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Dono do evento</p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
        </div>
        <div id="description-container" class="col-md-12">
            <h3>Sobre o evento:</h3>
            <p class="event-description">{{ $event->description }}</p>

        </div>
    </div>

</div>

@endsection