<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\DataLayer;
use App\Models\Prodotto;
use Illuminate\Support\Facades\Redirect;

class AcquistaProdottiController extends Controller
{
    
    public function index()
    {
        $dl = new DataLayer();
        $prodotti = $dl->listaProdotti();
        session_start();

        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return view('prodotti.acquistaprodotti')->with(["lista_prodotti" => $prodotti, 'logged'=>false, 'loggedRole' => null]);
           }
        else{
            return view('prodotti.acquistaprodotti')->with(["lista_prodotti" => $prodotti, 'logged'=>true, 'loggedNome' => $_SESSION['loggedNome'], 'loggedRole' => $_SESSION['loggedRole']]); 
           }
    }

    public function create()
    {
        session_start();
        if(!isset($_SESSION['logged']) || $_SESSION['logged']==false){
            return Redirect::to(route('utente.authentication'))->with('logged',false);
           }
        else{
            return view('prodotti.inserisciprodotto')->with('logged',true)->with('loggedName', $_SESSION['loggedName']); 
           }
    }

    public function store(Request $request)
    {
        session_start();

        if(!$request->hasFile('immagine')){
            return view('prodotti.errorImage');
        }

        $timeval = sha1(time());
        $request->file('immagine')->storeAs('/public/images/', $timeval.'.jpg');

        $prodotto = new Prodotto();
        $prodotto->immagine='images/'. $timeval.'.jpg';   
        $prodotto->nome=$request->input('nome');
        $prodotto->stato=$request->input('stato');
        $prodotto->prezzo=$request->input('prezzo');
        $prodotto->save();
        Redirect::to(route('acquistaprodotti.index'));
        return view('prodotti.postprodotto');
    }

    public function show() {
        // NOT USED
    }


    public function edit($id) {
        session_start();
        $dl = new DataLayer();
        $prodotto = $dl->findProdottoById($id);

        return view('prodotti.modificaprodotto')->with('logged', true)->with('loggedName', $_SESSION["loggedName"])->with('prodotto',$prodotto);
    }

    public function update(Request $request, $id) {
        session_start();
        $dl = new DataLayer();

        //if(! $request->hasFile('immagineProdotto')){
            //return view('prodotti.deleteErrorPage');
        //}

        //$timeval = sha1(time());
        
        $prodotto = Prodotto::find($id);
        //$prodotto->immagine='images/'. $timeval.'.jpg';  
        //$prodotto->immagine->storeAs('/public/images/', $timeval.'.jpg'); 
        //$prodotto->nome=$request->input('nomeProdotto');
        $prodotto->stato=$request->input('stato');
        $prodotto->prezzo=$request->input('prezzo');
        $prodotto->save();
        Redirect::to(route('acquistaprodotti.index'));
        return view('prodotti.modifica');
    }

    public function destroy(Request $request, $id) {
        
        $dl = new DataLayer();
        $prodotto = $dl->findProdottoById($id);
        if ($prodotto !== null) {
            $dl->eliminaProdotto($id);
            return Redirect::to(route('acquistaprodotti.index'));
        } else {
            return view('prodotti.deleteErrorPage');
        }
    }

    public function confirmDestroy($id) {
        session_start();
        $dl = new DataLayer();
        $prodotto = $dl->findProdottoById($id);
        if ($prodotto !== null) {
            return view('prodotti.deleteProdotto')->with(['logged' => true, 'loggedName'=>$_SESSION["loggedName"], 'prodotto' => $prodotto]);
        } else {
            return view('prodotti.deleteErrorPage')->with('logged', true)(['logged' => true, 'loggedName'=>$_SESSION["loggedName"]]);
        }
    }

    public function ajaxProdotto(Request $request){
        
        $dl = new Datalayer();

        if($dl->findProdottoByName($request->input('nome')))
        {
            $response = array('found'=>true);
        } else {
            $response = array('found'=>false);
        }
        return response()->json($response);

    }



}
