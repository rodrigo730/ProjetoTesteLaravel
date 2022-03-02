@extends('layouts.main')

@section('title' , 'Produtos')

@section('content')

 <h1>Produtos<h1>

    @if($busca != '')
    
    <p>A Busca é por: {{ $busca }}</p>

    @endif

    <a href="/">Voltar Para a Home</a>
       <br/>
    <a href="/contact">Ir Para os Contatos</a>
 

    @endsection