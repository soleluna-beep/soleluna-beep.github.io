<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdottiController extends Controller
{
    public function getProdotti() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('prodotti.prodotti')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('prodotti.prodotti')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }
}