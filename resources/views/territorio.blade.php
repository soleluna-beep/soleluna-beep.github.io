@extends('layout.master')

@section('titolo')
Il Territorio
@endsection

@section('stile', 'style.css')

@section('left_navbar')
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link current" aria-current="page" href="{{route('territorio')}}">Il Territorio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('coltivazioni')}}">Coltivazioni</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('animali')}}">Allevamenti</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Prodotti</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('prodotti')}}">I Nostri Prodotti</a></li>
                      <li><a class="dropdown-item" href="{{route('acquistaprodotti.index')}}">Prenota Prodotti</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('diconodinoi.index')}}">Dicono di noi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('contatti')}}">Contatti</a>
                  </li>
@endsection

@section('breadcrumb')
            <!-- <a href="{{route('chisiamo')}}" class="btn btn-testa btn-sm" style="margin-left: 0.25cm;">Torna alla Home</a> -->
@endsection

@section('titolo1')
                    Il Territorio
@endsection

@section('corpo1')
          <div class="row justify-content-md-center" style="margin-bottom: 1cm; margin-top: 0.5cm;">

          <div class="col-sm-5 align-self-center" style= "background-color: rgb(238, 208, 132);">  
                <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" style= " margin-left: 0.25cm; margin-right: 0.25cm; margin-top: 0.75cm; margin-bottom: 0.75cm;">
                  <div class="carousel-inner">
   
                   <div class="carousel-item active" data-bs-interval="1700">
                     <img src="img/t1.JPG" class="img-fluid" alt="territorio" >
                   </div>
   
                   <div class="carousel-item" data-bs-interval="1700">
                     <img src="img/t2.JPG" class="img-fluid" alt="coltivazioni" >
                   </div>
   
                   <div class="carousel-item" data-bs-interval="1700">
                     <img src="img/t3.JPG" class="img-fluid" alt="allevamenti" >
                   </div>
   
                   <div class="carousel-item" data-bs-interval="1700">
                     <img src="img/t4.JPG" class="img-fluid" alt="prodotti" >
                   </div>
   
                   <div class="carousel-item" data-bs-interval="1700">
                     <img src="img/t5.jpg" class="img-fluid" alt="contatti" >
                   </div>

                   <div class="carousel-item" data-bs-interval="1700">
                    <img src="img/t6.JPG" class="img-fluid" alt="contatti">
                  </div>

                  <div class="carousel-item" data-bs-interval="1700">
                    <img src="img/t7.jpg" class="img-fluid" alt="contatti" >
                  </div>

                  <div class="carousel-item" data-bs-interval="1700">
                    <img src="img/t8.JPG" class="d-block w-100" alt="contatti" >
                  </div>

                   </div>
               </div>
             </div>     
    

            <div class="col-sm-5 align-self-center" >
            <div class="row justify-content-md-center">
              <p style=" text-align: center;">
                Castelli Calepio è un piccolo borgo situato sul confine della provincia bergamasca, fiancheggiato dal fiume Oglio. Vicinissimo al lago d'Iseo, gode di un'invidiabile posizione 
                che contraddistingue tutta la valle fluviale: colline soleggiate, terreni fertili, boschi e
                vigneti.
                </p>
                </div>

                <div class="row justify-content-md-center">
              <p style=" text-align: center;">
                Proprio per questo nell'antichità  questa zona era chiamata Kalos Epias, ossia terra 
                buona, considerata ideale per le coltivazioni grazie al suo clima particolarmente mite e alla
                vicinanza del lago, così come molto antica è sempre stata la sua tradizione vitivinicola.
                </p>
                </div>


             <div class="row justify-content-md-center">
             <p style=" text-align: center;">
                
                È proprio in questo territorio infatti, ricco di storia e tradizioni, che viene prodotto 
                l'ottimo vino Valcalepio doc: una fascia lunga e stretta dove si trovano circa 800 ettari 
                di vigneto e qualche decina di ettari di oliveto, attività che il contadino bergamasco 
                difende con forza e passione. È proprio qui che la nostra piccola azienda agricola da 4 generazioni coltiva la terra 
                e da essa ricava prodotti agricoli tipici della tradizione bergamasca.</p>
            </div>
            </div>
 
       </div>         

@endsection


@section('footer')
<div class="row justify-content-md-center">

        <div class="col-sm-3 align-self-center" style="margin-top: 0.2cm; margin-bottom: 0.5cm; ">
        <div class="row justify-content-md-center text-center">
        <a href="{{route('index')}}" target="_self">
            <img src="img/lg2.png" alt="logo" width="130" height="130" style="margin-bottom: 0.35cm; margin-top: 1cm;">
          </a>
          </div>
          <div class="row justify-content-md-center">
          <h5 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-style: italic; color: rgb(82, 38, 8); text-align: center; margin-top: 0.25cm;">Azienda Agricola Soleluna</h5>
          </div>
          <div class="row justify-content-md-center">
          <h11 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-style: italic; color: rgb(82, 38, 8); text-align: center;">Fratelli Pagani</h11>
          </div>
        </div>

        <div class="col-sm-2" style="margin-top: 1.5cm; ">
            <p style="font-size: small; font-weight: bolder; margin-left: 0.25cm;">Chi siamo?</p>
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
              <a  type="button" class="btn btn-sm" style="font-size: small; text-align: left;" href="{{route('index')}}">Home</a>
              <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('territorio')}}">Il Territorio</a>
              <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('coltivazioni')}}">Coltivazioni</a>              
              <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('animali')}}">Allevamenti</a>
              <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('prodotti')}}">I Nostri Prodotti</a>
              <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('diconodinoi.index')}}">Dicono di noi</a>
            </div>
        </div>

        <div class="col-sm-2" style="margin-top: 1.5cm;">
          <p style="font-size: small; font-weight: bolder; margin-left: 0.25cm;">Prodotti</p>
          <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
            <a  type="button" class="btn btn-sm" style="font-size: small; text-align: left;" href="{{route('salame')}}">Salame Bergamasco</a>
            <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('cacciatore')}}">Cacciatore</a>
            <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('coppaepancetta')}}">Coppa e Pancetta</a>
            <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('salamelle')}}">Salamelle</a>
            <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('cotechini')}}">Cotechini</a>
            <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="{{route('acquistaprodotti.index')}}">Prenota i nostri prodotti</a>
          </div>
      </div>

      <div class="col-sm-3" style="margin-top: 1.5cm;">
        <p style="font-size: small; font-weight: bolder; margin-left: 0.25cm;">Contatti</p>
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
          <a  type="button" class="btn btn-sm" style="font-size: small; text-align: left;" href="https://www.google.com/maps/dir//Azienda+Agricola+Soleluna+Dei+Flli+Pagani+Luigi+E+Piero+Stefano+S.S.,+Via+Pedretti,+Castelli+Calepio,+BG/@45.6241494,9.8754338,2146m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x47815d5385817cd1:0x4ef9e371cc1c3d0f!2m2!1d9.8914515!2d45.6305422?hl=it&entry=ttu">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(82, 38, 8)" class="bi bi-house" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
            </svg>
           Via Pedretti 52 24060 Castelli Calepio (BG)
          </a>
          <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="tel:+393453849729">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(82, 38, 8)" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            + 39 345 3849729 - Marco
          </a>
          <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="tel:+393470660224">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(82, 38, 8)" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            + 39 347 0660224 - Piero
          </a>
          <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="https://wa.me/+393453849729">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(82, 38, 8)" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
            + 39 345 3849729</a>
          <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="mailto:pagani@agricolasoleluna.it">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(82, 38, 8)" class="bi bi-envelope-at" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
              <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
            </svg>
            pagani@agricolasoleluna.it</a>
            <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(82, 38, 8)" class="bi bi-clock" viewBox="0 0 16 16">
            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
            </svg>
            Lun-Ven: 8-12/14-18, Sab 9-12, Domenica chiuso</a>
            </div>
        </div>

    <div class="col-sm-2" style="margin-top: 1.5cm;">
      <p style="font-size: small; font-weight: bolder; margin-left: 0.25cm;">Social</p>
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
          <a  type="button" class="btn btn-sm" style="font-size: small; text-align: left;" href="https://www.instagram.com/soleluna_azienda_agricola/?utm_source=qr">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
           Instagram
          </a>
          <a  type="button" class="btn btn-sm" style=" font-size: small; text-align: left;" href="https://www.facebook.com/profile.php?id=61567083185381">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
           Facebook
          </a>

        </div>
     </div>

    </div>

    

    <div class="row justify-content-md-center">
      <div class="col-sm-9 copiright">
       <h7 style="margin-top:0.1cm; margin-bottom:0.1cm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512"/>
        </svg> Copyright 2024 - All rights reserved - Azienda Agricola Soleluna dei F.lli Pagani Luigi e Piero Stefano S.S - 
        Via Pedretti 52 - 24060 - Castelli Calepio (BG) - P.I/C.F 01797390166</h7>  

      <div>

    </div>
    
@endsection