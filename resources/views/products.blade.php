@extends('layouts.main')

@section('tille' , 'Produto ')

@section('content')
  
@if($id != null)
  <p>Exibindo Produto id: {{$id}}</p> 
@endif

@endsection