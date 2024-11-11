<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalamelleController extends Controller
{
    public function getSalamelle() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('prodotti.salamelle')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('prodotti.salamelle')->with(['logged'=>true,'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }
}