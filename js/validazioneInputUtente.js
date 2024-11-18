function checkRegistrazioneForm(button){  // Controllo la form per l'iscrizione

      error= false;
    
      nome= $("#nome");
      nome_msg=$("#invalid-nome");
      
    
      if (nome.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
    
        nome_msg.html("Attenzione: non hai inserito il tuo nome!"); // Riempio con il testo lo span con id invalid-title
        error = true;
        nome.focus();
    
      } else {
        nome_msg.html("");
      }
    
    
      cognome= $("#cognome");
      cognome_msg=$("#invalid-cognome");
    
      if (cognome.val().trim() === "") {   
        cognome_msg.html("Attenzione: non hai inserito il tuo cognome!"); 
        error = true;
        cognome.focus();
    
      } else {
          cognome_msg.html("");
      }
    
    
      email= $("#email");
      email_msg=$("#invalid-email");
      var emailRegularExpression = new RegExp(/^[A-Za-z0-9]+(\.[A-Za-z0-9]+)*@[A-Za-z0-9-]+\.[A-Za-z]{2,3}$/, "g");
    
      if (email.val().trim() === "")
      {
        email_msg.html("Attenzione: non hai inserito alcuna email!");
        error = true;
        email.focus();
      } else if(!email.val().trim().match(emailRegularExpression))
      {
        email_msg.html("Email invalida: controlla di aver inserito un'email nel formato corretto!");
        error = true;
        email.focus();
      } else {
        email_msg.html("");
      }

  
      cellulare= $("#cellulare");
      cellulare_msg=$("#invalid-cellulare");
      var regularExpression = new RegExp("^([0-9]+)$", "g"); 
    
      if (cellulare.val().trim() === "") {    
    
        cellulare_msg.html("Attenzione: non hai inserito un numero di cellulare!"); 
        error = true;
        cellulare.focus();
    
      } else if (!cellulare.val().trim().match(regularExpression)){
        cellulare_msg.html("Numero di cellulare non valido: controlla di averlo inserito correttamente!"); 
        error = true;
        cellulare.focus();

      } else {

        cellulare_msg.html("");
        
      }

      indirizzo= $("#indirizzo");
      indirizzo_msg=$("#invalid-indirizzo");
  
      if (indirizzo.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
  
      indirizzo_msg.html("Attenzione: non hai inserito alcun indirizzo!"); // Riempio con il testo lo span con id invalid-title
      error = true;
      indirizzo.focus();
  
    } else {
       indirizzo.html("");
    }
    
    citta= $("#citta");
    citta_msg=$("#invalid-citta");
  
    if (citta.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
  
      citta_msg.html("Attenzione: non hai inserito la città di residenza"); // Riempio con il testo lo span con id invalid-title
      error = true;
      citta.focus();
  
    } else {
      citta_msg.html("");
    }

    cap= $("#cap");
    cap_msg=$("#invalid-cap");
    var regularExpression = new RegExp("^([0-9]+)$", "g"); 
    
      if (cap.val().trim() === "") {     
    
        cap_msg.html("Attenzione: non hai inserito il CAP!"); 
        error = true;
        cap.focus();
    
      } else if (!cap.val().trim().match(regularExpression)){
        cap_msg.html("CAP non valido: controlla di averlo inserito correttamente!"); 
        cap.focus();

      } else {

        cap_msg.html("");
        
      }

    provincia= $("#provincia");
    provincia_msg=$("#invalid-provincia");
  
    if (provincia.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
  
      provincia_msg.html("Attenzione: non hai inserito la provincia!"); // Riempio con il testo lo span con id invalid-title
      error = true;
      provincia.focus();
  
    } else {
        provincia_msg.html("");
    }
    
      
      password= $("#password");
      password_msg=$("#invalid-password");
    
      if (password.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
    
          password_msg.html("Attenzione: non hai inserito una password!"); // Riempio con il testo lo span con id invalid-title
          error = true;
          password.focus();
    
      } else if(password.val().length < 8) {
        password_msg.html("La password deve essere lunga almeno 8 caratteri!");
        error = true; 
      
      } else {
            password_msg.html("");
      }

      password_uno= $("#password_uno");
      password_uno_msg=$("#invalid-password_uno");
    
      if (password_uno.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
    
          password_uno_msg.html("Attenzione: non hai inserito la password di conferma!"); // Riempio con il testo lo span con id invalid-title
          error = true;
          password_uno.focus();
    
      } else if (password_uno.val().trim() === password.val().trim()) {
        password_uno_msg.html("");
      } else {
            password_uno_msg.html("Attenzione: la password di conferma che hai inserito non coincide!");
            error = true;
            password_uno.focus();
      }
      
  if(!error) {
    if(button === 'Registrati') {
        $.ajax('/ajaxRegistrazione', {

            method: 'GET',
    
            data: {nome: nome.val().trim(),
                cognome: cognome.val().trim(),
                email: email.val().trim(),
                cellulare: cellulare.val().trim(),
                indirizzo: indirizzo.val().trim(),
                citta: citta.val().trim(),
                cap: cap.val().trim(),
                provincia: provincia.val().trim(),
                password: password.val().trim(),
                password_uno: password_uno.val().trim(),
            },
    
            success: function (result) {
    
                if (result.found)
                {
                    error = true;
                    email_msg.html("Attenzione: esiste già un profilo associato a questa email");
                } else {
                    $('form[name=registration]').submit();
                    return;
                }
            }
    
        });   
    }
}
      
}


function checkProdottoForm(button){  

    error= false;
  
    nome= $("#nome");
    nome_msg=$("#invalid-nome");
    
  
    if (nome.val().trim() === "") {  
  
      nome_msg.html("Attenzione: non hai inserito il nome del prodotto!"); 
      error = true;
      nome.focus();
  
    } else {
      nome_msg.html("");
    }


    stato_msg = $("#invalid-stato");

    stato = document.getElementById("stato");
  
    if ( stato.value === "") {        

       stato_msg.html("Attenzione: devi selezionare almeno uno stato per il prodotto!");
       error = true;
       stato.focus();

  } else {
      stato_msg.html("");
  }
    
  
    prezzo= $("#prezzo");
    prezzo_msg=$("#invalid-prezzo");
    var regularExpression = new RegExp("^([0-9]+)$", "g"); 
  
    if (prezzo.val() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
  
      prezzo_msg.html("Attenzione: non hai inserito il prezzo del prodotto!"); // Riempio con il testo lo span con id invalid-title
      prezzo.focus();
      error = true;
  
    } else if (!prezzo.val().trim().match(regularExpression)){
      prezzo_msg.html("Prezzo non valido: controlla di averlo inserito nel formato corretto!"); // Riempio con il testo lo span con id invalid-title
      prezzo.focus();
      error = true;
    } else {

      prezzo_msg.html("");
      
    }

 
    if(!error) {
    if(button === 'Inserisci') {
      $.ajax('/ajaxProdotto', {

          method: 'GET',
  
          data: {nome: nome.val().trim(),
                 stato: stato.value,
                 prezzo: prezzo.val().trim()

          },
  
          success: function (data) {
  
              if (data.found)
              {
                  error = true;
                  nome_msg.html("Attenzione: esiste già un prodotto con questo nome");
              } else {
                  $('form[name=acquistaprodotti]').submit();
                  return;
              }
          }
  
      });   
  }
}
    
}

function checkModificaProdottoForm(button){  

  error = false;
  
  prezzo= $("#prezzo");
  prezzo_msg=$("#invalid-prezzo");
  var regularExpression = new RegExp("^([0-9]+)$", "g"); 

  if (prezzo.val() === "") {   

    prezzo_msg.html("Attenzione: non hai inserito il prezzo del prodotto!"); 
    prezzo.focus();
    error = true;

  } else if (!prezzo.val().trim().match(regularExpression)){
    prezzo_msg.html("Prezzo non valido: controlla di averlo inserito nel formato corretto!"); 
    error = true;
  } else {

    prezzo_msg.html("");
    
  }


  if(!error) {
  if(button === 'Modifica') {
    
                $('form[name=modificaprodotti]').submit();
                return;
             
    }
  }
}


function checkLoginForm(button){  

    error= false;
  
    email= $("#email");
    email_msg=$("#invalid-email");
  
    if (email.val().trim() === "") {   
  
        email_msg.html("Attenzione: non hai inserito alcuna email!"); 
        error = true;
  
    } else {
          email_msg.html("");
    }
    
    password= $("#password");
    password_msg=$("#invalid-password");
  
    if (password.val().trim() === "") {   

        password_msg.html("Attenzione: non hai inserito la password!"); 
        error = true;
  
    } else {
          password_msg.html("");
    }

    if(!error)
    {
      if(button === 'Login')
      {
        $('form[name=login]').submit();
        return;
      }
    }
    
}

function checkPassword(button){  

    error= false;

    password= $("#password");
      password_msg=$("#invalid-password");
    
      if (password.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
    
          password_msg.html("Attenzione: non hai inserito una nuova password!"); // Riempio con il testo lo span con id invalid-title
          error = true;
          password.focus()

      } else if(password.val().length < 8) {
        password_msg.html("La password deve essere lunga almeno 8 caratteri!");
        error = true;
      } else {
            password_msg.html("");
      }

      password_nuova= $("#password_nuova");
      password_nuova_msg=$("#invalid-password_nuova");

      if (password_nuova.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  
    
        password_nuova_msg.html("Attenzione: non hai inserito la password di conferma!"); // Riempio con il testo lo span con id invalid-title
        error = true;
        password_nuova.focus()

    } else if (password_nuova.val().trim() === password.val().trim()) {
      password_nuova_msg.html("");

    } else {
          password_nuova_msg.html("Attenzione: la password di conferma non è corretta!");
          error = true;
          password_nuova.focus();
    }

    if(!error) {
        if(button === 'Modifica')
        {
          $('form[name=modificapassword]').submit();
          return;
        }
        
  }
}


function checkRecensioneForm(button){  

  error= false;

  autore= $("#autore");
  autore_msg=$("#invalid-autore");

  if (autore.val() === "") {   

      autore_msg.html("Attenzione: non hai inserito l'autore della recensione!"); 
      error = true;
      autore.focus();

  } else {
        autore_msg.html("");
  }
  
  stelle_msg = $("#invalid-stelle");
  
    //stato= $("#stato").find(":selected").text();

    stelle = document.getElementById("stelle");
    //var selected = stato.options[stato.selectedIndex].text;
  
    if ( stelle.value === "") {        

       stelle_msg.html("Attenzione: non hai selezionato le stelle da assegnare!");
       stelle.focus();
       error = true;
  } else {
      stelle_msg.html("");
  }
    

  if(!error)
  {
    if(button === 'Pubblica')
    {
      $('form[name=diconodinoi]').submit();
      return;
    }
  }
  
}

function checkModificaDatiForm(button){  // Controllo la form per l'iscrizione

  error= false;

  nome= $("#nome");
  nome_msg=$("#invalid-nome");
  

  if (nome.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  

    nome_msg.html("Attenzione: non hai inserito il tuo nome!"); // Riempio con il testo lo span con id invalid-title
    error = true;
    nome.focus();

  } else {
    nome_msg.html("");
  }


  cognome= $("#cognome");
  cognome_msg=$("#invalid-cognome");

  if (cognome.val().trim() === "") {   
    cognome_msg.html("Attenzione: non hai inserito il tuo cognome!"); 
    error = true;
    cognome.focus();

  } else {
      cognome_msg.html("");
  }


  email= $("#email");
  email_msg=$("#invalid-email");
  var emailRegularExpression = new RegExp(/^[A-Za-z0-9]+(\.[A-Za-z0-9]+)*@[A-Za-z0-9-]+\.[A-Za-z]{2,3}$/, "g");

  if (email.val().trim() === "")
  {
    email_msg.html("Attenzione: non hai inserito alcuna email!");
    error = true;
    email.focus();
  } else if(!email.val().trim().match(emailRegularExpression))
  {
    email_msg.html("Email invalida: controlla di aver inserito un'email nel formato corretto!");
    error = true;
    email.focus();
  } else {
    email_msg.html("");
  }


  cellulare= $("#cellulare");
  cellulare_msg=$("#invalid-cellulare");
  var regularExpression = new RegExp("^([0-9]+)$", "g"); 

  if (cellulare.val().trim() === "") {    

    cellulare_msg.html("Attenzione: non hai inserito un numero di cellulare!"); 
    error = true;
    cellulare.focus();

  } else if (!cellulare.val().trim().match(regularExpression)){
    cellulare_msg.html("Numero di cellulare non valido: controlla di averlo inserito correttamente!"); 
    error = true;
    cellulare.focus();

  } else {

    cellulare_msg.html("");
    
  }

  indirizzo= $("#indirizzo");
  indirizzo_msg=$("#invalid-indirizzo");

  if (indirizzo.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  

  indirizzo_msg.html("Attenzione: non hai inserito alcun indirizzo!"); // Riempio con il testo lo span con id invalid-title
  error = true;
  indirizzo.focus();

} else {
   indirizzo.html("");
}

citta= $("#citta");
citta_msg=$("#invalid-citta");

if (citta.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  

  citta_msg.html("Attenzione: non hai inserito la città di residenza"); // Riempio con il testo lo span con id invalid-title
  error = true;
  citta.focus();

} else {
  citta_msg.html("");
}

cap= $("#cap");
cap_msg=$("#invalid-cap");
var regularExpression = new RegExp("^([0-9]+)$", "g"); 

  if (cap.val().trim() === "") {     

    cap_msg.html("Attenzione: non hai inserito il CAP!"); 
    error = true;
    cap.focus();

  } else if (!cap.val().trim().match(regularExpression)){
    cap_msg.html("CAP non valido: controlla di averlo inserito correttamente!"); 
    error = true;
    cap.focus();

  } else {

    cap_msg.html("");
    
  }

provincia= $("#provincia");
provincia_msg=$("#invalid-provincia");

if (provincia.val().trim() === "") {   // Se il titolo privato degli spazi è la stringa vuota  

  provincia_msg.html("Attenzione: non hai inserito la provincia!"); // Riempio con il testo lo span con id invalid-title
  error = true;
  provincia.focus();

} else {
    provincia_msg.html("");
}

 
if(!error) {
if(button === 'Modifica') {
  $('form[name=modificaprofilo]').submit();
  return;
}
}
  
}


function checkOrdineForm(button){  

  error= false;

  prodotto_uno= document.getElementById("prodotto_uno");
  quantita_uno= $("#quantita_uno");
  prodotto_due= document.getElementById("prodotto_due");
  quantita_due= $("#quantita_due");
  prodotto_tre= document.getElementById("prodotto_tre");
  quantita_tre= $("#quantita_tre");
  prodotto_quattro= document.getElementById("prodotto_quattro");
  quantita_quattro= $("#quantita_quattro");
  prodotto_cinque= document.getElementById("prodotto_cinque");
  quantita_cinque= $("#quantita_cinque");
  prodotto_sei= document.getElementById("prodotto_sei");
  quantita_sei= $("#quantita_sei");


  errore_msg= $("#invalid-inserimento");
  
    if ((prodotto_uno.value === "" && prodotto_due.value === "" 
          && prodotto_tre.value === ""  && prodotto_quattro.value === "" 
          && prodotto_cinque.value === "" && prodotto_sei.value === "") ||
          (quantita_uno.val() === "" && quantita_due.val() === "" 
          && quantita_tre.val() === ""  && quantita_quattro.val() === "" 
          && quantita_cinque.val() === "" && quantita_sei.val() === ""))    
    {
      errore_msg.html("Attenzione: inserire almeno un prodotto con la relativa quantità!"); 
      error = true;
    } else if(prodotto_uno.value === "" && quantita_uno.val() != ""
     || prodotto_uno.value != "" && quantita_uno.val() === "") {
      errore_msg.html("Attenzione: controlla di aver inserito sia prodotto che quantità!"); 
      error = true;
      prodotto_uno.focus()
   } else if(prodotto_due.value === "" && quantita_due.val() != ""
   || prodotto_due.value != "" && quantita_due.val() === "") {
    errore_msg.html("Attenzione: controlla di aver inserito sia prodotto che quantità!"); 
    error = true;
    prodotto_due.focus()
    } else if(prodotto_tre.value === "" && quantita_tre.val() != ""
     || prodotto_tre.value != "" && quantita_tre.val() === "") {
      errore_msg.html("Attenzione: controlla di aver inserito sia prodotto che quantità!"); 
      error = true;
      prodotto_tre.focus()
    } else if(prodotto_quattro.value === "" && quantita_quattro.val() != ""
     || prodotto_quattro.value != "" && quantita_quattro.val() === "") {
      errore_msg.html("Attenzione: controlla di aver inserito sia prodotto che quantità!"); 
      error = true;
      prodotto_quattro.focus()
   } else if(prodotto_cinque.value === "" && quantita_cinque.val() != ""
   || prodotto_cinque.value != "" && quantita_cinque.val() === "") {
    errore_msg.html("Attenzione: controlla di aver inserito sia prodotto che quantità!"); 
    error = true;
    prodotto_cinque.focus()
    } else if(prodotto_sei.value === "" && quantita_sei.val() != ""
     || prodotto_sei.value != "" && quantita_sei.val() === "") {
      errore_msg.html("Attenzione: controlla di aver inserito sia prodotto che quantità!"); 
      error = true;
      prodotto_sei.focus();
  }else {
      errore_msg.html("");
  }

 
  if(!error)
  {
    if(button === 'Ordina')
    {
      $('form[name=nuovoordine]').submit();
      return;
    }
  }
  
}



  


  
  