<!-- esta estendendo do /layouts/main.blade.php -->
@extends('layouts.main')
<!-- esta passando o nome do titulo para a main.blade.php -->
@section('title','Contatos')
<!-- comeca o conteudo que vai ficar antes e depois do corpo da pagina -->
@section('content')

<p>Exibindo produto ID: {{$id}}</p>

@endsection