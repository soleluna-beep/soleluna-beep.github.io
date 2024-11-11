@extends('layout.form')

@section('titolo')
    Inserisci un nuovo prodotto
@endsection

@section('stile', 'style.css')

@section('corpo')
<div class="bg-image" style="background-image: url('../img/IMG_5023(1).jpg'); background-size: cover; height: 100vh">
    <div class="row justify-content-md-center">
        <div class="col-sm-5" style="background-color: rgb(235, 215, 106); margin-top: 1.2cm; opacity: 0.9">
            <form style="background-color: trasparent; margin-top:0.75cm; margin-bottom:1cm; margin-left: 0.25cm; 
            margin-right:0.5cm; color: rgb(82, 38, 8);" name="acquistaprodotti" id="acquistaprodotti" method="post"  action="{{ route('acquistaprodotti.store') }}" enctype='multipart/form-data'>
            @csrf
            <div class="mb-3">
            <h2 style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-style: italic; color: rgb(82, 38, 8);">Inserisci un nuovo prodotto</h2>
            </div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Seleziona un'immagine da inserire*</label>
                <input class="form-control" type="file" id="immagine" name="immagine" accept=".jpg">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label" style="margin-top: 0.25cm;">Nome prodotto*</label>
                <input name="nome" type="name" class="form-control" style="color: rgb(82, 38, 8);" 
                id="nome">
                <span id=invalid-nome style="color: red; font-weight: bold;"></span>
            </div>
            <div class="mb-3">
             <label for="formFile" class="form-label">Stato*</label>
                <select name="stato" id="stato" class="form-select" required="required">
                    <option value="" selected>Stato</option>
                    <option value="Disponibile">Disponibile</option>
                    <option value="Non Disponibile">Non Disponibile</option>
                </select>
                <span id=invalid-stato style="color: red; font-weight: bold;"></span>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label" style="margin-top: 0.25cm;">Prezzo* (€/kg)</label>
                <input name="prezzo" type="name" class="form-control" style="color: rgb(82, 38, 8);" id="prezzo">
                <span id=invalid-prezzo style="color: red; font-weight: bold;"></span>
            </div>
            
            <a href="{{ route('acquistaprodotti.index') }}" class="btn btn-elimina" style="margin-top:0.25cm; margin-left:4cm; 
            margin-right: 0.25cm"> Annulla</a>
            <input id="Inserisci" type="submit" value="Inserisci" class="btn btn-prodotti" style="margin-top:0.25cm;" onclick="event.preventDefault(); checkProdottoForm('Inserisci')"/>
            </form> 
        </div>
    </div>
</div>

@endsection