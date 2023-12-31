<!-- esta estendendo do /layouts/main.blade.php -->
@extends('layouts.main')
<!-- esta passando o nome do titulo para a main.blade.php -->
@section('title','Criar Evento')
<!-- comeca o conteudo que vai ficar antes e depois do corpo da pagina -->
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <!-- salva os arquivos no banco de dados, enctype eh para mandar arquivos no formulario HTML  -->
    <form action="/events" method="POST" enctype="multipart/form-data">
        <!-- libera para enviar formularios ao banco -->
        @csrf
        <div class="form-group">
            <label for="image">Imagem do evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
</div>
@endsection