<!-- esta estendendo do /layouts/main.blade.php -->
@extends('layouts.main')
<!-- esta passando o nome do titulo para a main.blade.php -->
@section('title','HDC contatos')
<!-- comeca o conteudo que vai ficar antes e depois do corpo da pagina -->
@section('content')

@if($busca != '')
<p>O usuário está buscando por: {{$busca}}</p>

@endif
<h1>Está é uma página de contato</h1>
<p>{{$busca}}</p>
<a href="/">Voltar</a>
<!-- finaliza o conteudo da pagina -->
@endsection