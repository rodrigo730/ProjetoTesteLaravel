@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
   
   <h1>Cadastro de Clientes</h1>
    </br>
   <h2>Nome:</h2>
    <input type="text" name="nome" placeholder="Digite o Nome">
   <h2>Endereço:</h2>
    <input type="text" name="Endereço" placeholder="Informe o Endereço">
   <h2>Telefone:</h2>
    <input type="number" name="Telefone" placeholder="Informe o Telefone">
   



@endsection 