?php

switch ($messaggio) {

case "<div style=\"display: inline; color: red;\">ERRORE</div> di scrittura del file":                  $messaggio = "<div style=\"display: inline; color: red;\">ERREUR</div> Redaction des fichier"; break;
case "Nome utente":                             $messaggio = "Nom de l'utilisateur"; break;
case "Password":                                $messaggio = "Mot de passe"; break;
case "Entra":                                   $messaggio = "Connecter"; break;
case "Login per HotelDruid":                    $messaggio = "Connecter a l'IdealVilla PMS"; break;
case "Sessione <div style=\"display: inline; color: red;\">scaduta</div>":      $messaggio = "<div style=\"display: inline; color: red;\">Expired</div> session"; break;
case "Nome utente o password <div style=\"display: inline; color: red;\">errati</div>": $messaggio = "<div style=\"display: inline; color: red;\">Incorrecte</div> nom d'utilisateur ou mot de passe"; break;
case "Numero eccesivo di login <div style=\"display: inline; color: red;\">errati</div> negli ultimi":  $messaggio = "Nombre Excessif de connection <div style=\"display: inline; color: red;\">incorrect</div>"; break;
case "minuti":                                  $messaggio = "minutes"; break;
case "Dopo un login <div style=\"display: inline; color: red;\">errato</div> si devono attendere":      $messaggio = "Apres une connexion <div style=\"display: inline; color: red;\">incorrecte</div> vous devez attendre"; break;
case "secondi":                                 $messaggio = "seconds"; break;
case "Il database deve essere aggiornato":      $messaggio = "La base de donnee doit etre mis a jour"; break;
case "Aggiorna":                                $messaggio = "Mettre a jour"; break;
case "Mancano solo":                            $messaggio = "Seulement"; break;
case "tentativi prima del blocco dei login":    $messaggio = "Tentative restante avant le verouillage du compte"; break;
case "Manca solo":                              $messaggio = "Seulement"; break;
case "tentativo prima del blocco dei login":    $messaggio = "Tentative restante avant le verouillage du compte"; break;
case "È possibile reimpostare la password dal proprio account di hosting":      $messaggio = "Vous pouvez reinitialiser votre mot de passe avec le compte administrateur"; break;
case "orario del server":                       $messaggio = "heure du serveur"; break;\
case "Avviso":                                  $messaggio = "Attention"; break;
case "Mancano meno di":                         $messaggio = "MOins que"; break;
case "giorni alla scadenza dell'account":       $messaggio = "Jours restant jusqu'a l'expiration de compte"; break;
case "Numero eccesivo di sessioni <span style=\"color: red;\">errate</span> originate dal tuo indirizzo IP negli ultimi":       $messaggio = "Nombre excessif de sessions <span style = \ "color: red; \"> incorrectes </span> à partir de votre adresse IP au cours de la dernière"; break
case "È possibile che qualcuno dalla tua stessa rete stia tentando di rubare il tuo accesso":   $messaggio = "Il est possible que quelqu'un de votre même réseau essaie de voler votre accès"; break;
case "":                $messaggio = ""; break;
case "":                $messaggio = ""; break;

} # fine switch ($messaggio)

?>
