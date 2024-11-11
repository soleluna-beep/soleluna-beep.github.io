<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Recensione;
use App\Models\DataLayer;

class RecensioneController extends Controller
{    
    public function index()
    {
        $dl = new DataLayer();
        $recensioni = $dl->listaRecensioni();
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('recensioni.diconodinoi')->with("lista_recensioni",$recensioni)->with(['logged'=>false, 'loggedRole'=>null]);
           }
        else{
            return view('recensioni.diconodinoi')->with("lista_recensioni",$recensioni)->with(['logged'=>true, 'loggedName'=> $_SESSION['loggedName'], 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole'=> $_SESSION['loggedRole']]); 
           }

    }

    public function create()

    {
        session_start();
        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return Redirect::to(route('utente.authentication'))->with('logged',false);
           }
        else{
            return view('recensioni.inseriscirecensione')->with('logged',true)->with('loggedName', $_SESSION['loggedName'])->with('loggedRole', $_SESSION['loggedRole']); 
           }
    }


    public function store(Request $request)
    {
        session_start();
        $dl = new DataLayer();
        $dl->aggiungiRecensione($request->input('autore'),$request->input('stelle'),$request->input('testo'));
        Redirect::to(route('diconodinoi.index'));
        return view('recensioni.postrecensione')->with('logged',true)->with('loggedName', $_SESSION['loggedName'])->with('loggedRole', $_SESSION['loggedRole']);
    }

    public function show() {
        // NOT USED
    }

}