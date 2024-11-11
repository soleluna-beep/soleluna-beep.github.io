<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoppaPancettaController extends Controller
{
    public function getCoppaPancetta() {
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('prodotti.coppaepancetta')->with(['logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('prodotti.coppaepancetta')->with(['logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }
}