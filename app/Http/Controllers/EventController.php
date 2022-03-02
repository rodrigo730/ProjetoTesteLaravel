<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index () {
        $arr = [1,2,3,4,5];
        $nomes = ["Rodrigo","Guilherme","Julia","Carlos"];
      
          return view('welcome',
                     [
                     
                      'arr' => $arr,
                     'nomes' => $nomes
                     
                     ]);

    }

   public function cadastro () {
    
    return view ('events.cadastro');
     
   }
   public function login () {
    
    return view ('events.login');
     
   }
}
