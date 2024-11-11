<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CotechiniController extends Controller
{
    public function getCotechini() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('prodotti.cotechini')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('prodotti.cotechini')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }
}