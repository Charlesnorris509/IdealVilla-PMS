<?php

switch ($messaggio) {

case "via":                             $messaggio = "Addresse"; break;
case "Torna indietro":                  $messaggio = "Retourner"; break;
case "Da":                              $messaggio = "Du"; break;
case "A":                               $messaggio = "Au"; break;
case "Oggetto":                         $messaggio = "Object"; break;
case "Allega":                          $messaggio = "Attacher"; break;
case "Spedisci":                        $messaggio = "Envoyer"; break;
case "L'email a":                       $messaggio = "L'email pour"; break;
case "è stata inviata":                 $messaggio = "a ete envoye"; break;
case "bcc a":                           $messaggio = "bcc a"; break;
case "Non si è potuto inviare l'email a":       $messaggio = "Il n'a pas ete possible d'envoyer cette email"; break;
case "documento":                       $messaggio = "document"; break;
case "<span class=\"colblu\">salvato</span> come":      $messaggio = "<span class=\"colblu\">Sauvegarder</span> as"; break;
case "Cancella il documento":           $messaggio = "Effacer ce document"; break;
case "Cancella i documenti":            $messaggio = "Effacer ces documents"; break;
case "Il documento":                    $messaggio = "le document"; break;
case "è stato <b style=\"font-weight: normal; color: blue;\">cancellato</b>":   $messaggio = "a ete <b style=\"font-weight: normal; color: blue;\">effacer</b>"; break;
case "Transazione <font color=\"red\">scaduta</font>":  $messaggio = "	Transaction<font color=\"red\">Expiree</font>"; break;
case "Sovrascrivi":                     $messaggio = "Remplacer"; break;
case "Documenti già esistenti riguardanti questa prenotazione": $messaggio = "Il existe deja un document dans la base de donnee pour cette reservation"; break;
case "Documenti già esistenti riguardanti queste prenotazioni": $messaggio = "Il eciste deja des documents dans la base de donnee pour ces reservations"; break;
case "Salva dei nuovi documenti":       $messaggio = "Sauvegarder des nouveaux documents"; break;
case "Salva un nuovo documento":        $messaggio = "Sauvegarder un nouveau document"; break;
case "<span class=\"colblu\">Attenzione</span>: una email con lo stesso oggetto è già stata inviata al cliente":        $messaggio = "<span class=\"colblu\">Warning</span>: Un email avec le similaire object a deja ete envoye au client"; break;
case "Errore":                          $messaggio = "Erreur"; break;
case "ha scritto":                      $messaggio = "Ecrit"; break;
case "in data":                         $messaggio = "le"; break;
case "Non si è potuto mascherare il mittente dell'email perchè attualmente <b class=\"colwarn\">SPF non è configurato correttamente</b> sul dominio della email":  $messaggio = "Function INvalid Contact Tech Support"; break;
case "L'utente amministratore può cambiare questa inpostazione in":     $messaggio = "L'administrateur peut changer ses parametres dans "; break;
case "configura e personalizza":        $messaggio = "configurer et personaliser"; break;
case "È stato raggiunto il numero massimo di email giornaliere":        $messaggio = "Vous atteint la limit des emails que vous envoyez dans une journee"; break;
case "Per mandare altre email l'utente amministratore può impostare un server remoto in":       $messaggio = "Poir comtinuer a envoyer des emails l'utilisateur  administrator user peut arranger un server dans"; break;
case "":                $messaggio = ""; break;
case "":                $messaggio = ""; break;

} # fine switch ($messaggio)



?>
