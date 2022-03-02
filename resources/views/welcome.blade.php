  @extends('layouts.main')

  @section('title', 'HDC Events')

  @section('content')
     
     
     
     
     
     <h1>Estudando Laravel</h1>

     <img src="/img/banner.jpg" alt="img">

     <br/>

     <a href="/contact">Ir Para os Contatos</a>
        </br>
     <a href="/produtos">Ir Para os Produtos</a>

     @for($i = 0; $i < count($arr); $i++)
      
         <p>{{ $arr[$i] }} - {{ $i }}</p>

      @if ($i == 2)
     
         <p>O i é 2</p>

       @endif
     @endfor

    @php

        $name = "João";
        echo "$name";

    @endphp

    @foreach ($nomes as $nome)

       <p>{{ $nome }}</p>
       <p>{{$loop->index}}</p>

    @endforeach
   

    @endsection