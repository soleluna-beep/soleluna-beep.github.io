<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CacciatoreController extends Controller
{
    public function getCacciatore() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('prodotti.cacciatore')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('prodotti.cacciatore')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }
}