<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\DataLayer;
use App\Models\Ordine;
use Illuminate\Support\Facades\Redirect;

class OrdineController extends Controller
{
   
    public function index()
    {
        session_start();
        $dl = new DataLayer();
        $ordini = $dl->listaOrdini();
        

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('ordini.ordini')->with(["lista_ordini" => $ordini, 'logged'=>false, 
            'loggedRole' => null]);
           }
        else{
            return view('ordini.ordini')->with(["lista_ordini" => $ordini, 'logged'=>true, 
            'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }

    public function show($id){
        return 'ordine numero '.$id;
    }


    public function destroy(Request $request, $id) {
        
        $dl = new DataLayer();
        $ordine = $dl->findOrdineById($id);
        if ($ordine !== null) {
            $dl->eliminaOrdine($id);
            return Redirect::to(route('ordine.index'));
        } else {
            return view('ordini.erroredelete');
        }
    }

    public function confirmDestroy($id) {
        session_start();
        $dl = new DataLayer();
        $ordine = $dl->findOrdineById($id);
        if ($ordine !== null) {
            return view('ordini.deleteOrdine')->with(['logged' => true, 'loggedName'=>$_SESSION["loggedName"], 'ordine' => $ordine]);
        } else {
            return view('ordini.erroredelete')->with('logged', true)(['logged' => true, 'loggedName'=>$_SESSION["loggedName"]]);
        }
    }

    public function create()

    {
        session_start();
        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return Redirect::to(route('utente.authentication'))->with('logged',false);
           }
        else{
            return view('ordini.nuovoordine')->with('logged',true)->with('loggedName', $_SESSION['loggedName']); 
           }
           
    }

    public function store(Request $request)
    {
        session_start();

        $dl = new DataLayer();
        $user= auth()->user()->id;
        $ordine_id=$dl->aggiungiOrdine($request->input('prodotto_uno'), $request->input('quantita_uno'), 
        $request->input('prodotto_due'), $request->input('quantita_due'), $request->input('prodotto_tre'),
        $request->input('quantita_tre'), $request->input('prodotto_quattro'), $request->input('quantita_quattro'),
        $request->input('prodotto_cinque'), $request->input('quantita_cinque'), $request->input('prodotto_sei'),
        $request->input('quantita_sei'), $request->input('descrizione'), $user);
        Redirect::to(route('utente.ordinipersonali'))->with('user', $user); 
        return view('ordini.postordine');
    }

    


}