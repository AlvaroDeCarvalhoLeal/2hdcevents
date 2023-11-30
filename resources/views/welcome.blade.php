<!-- esta estendendo do /layouts/main.blade.php -->
@extends('layouts.main')
<!-- esta passando o nome do titulo para a main.blade.php -->
@section('title','HDC EVENTS')
<!-- comeca o conteudo que vai ficar antes e depois do corpo da pagina -->
@section('content')
   
<div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>

</div>
<!-- mostrando os eventos -->
<div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p id="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
                @foreach($events as $event)
                        <div class="card col-md-3">
                                <!-- diretorio onde as imagens estao salvas -->
                                <img src="/img/events/{{ $event->image }}" alt="{{$event->title}}">
                                <div class="card-body">
                                        <p class="card-date">10/09/2023</p>
                                        <h5 class="card-title">{{$event->title}}</h5>
                                        <p class="card-participants">X participantes</p>
                                        <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                                </div>
                        </div>
                @endforeach
        </div>
</div>
<!-- finaliza o conteudo da pagina -->
@endsection