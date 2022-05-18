<?php

switch ($messaggio) {

case "Tabella Mese":                            $messaggio = "Tableau mensuel"; break;
case "situazione alle":                         $messaggio = "situer au"; break;
case "del":                                     $messaggio = "du"; break;
case "Tabella prenotazioni del":                $messaggio = "Table de reservation de"; break;
case "ERRORE":                                  $messaggio = "ERREUR"; break;
case "Torna al menù principale":                $messaggio = "Retour au menu principal"; break;
case "Visualizza la tabella per la stampa":     $messaggio = "Afficher le tableau pour imprimer"; break;
case "Visualizza la tabella con i giorni":      $messaggio = "Afficher le tableau avec les jours"; break;
case "documento di tipo":                       $messaggio = "Type de document"; break;
case "visualizza":                              $messaggio = "Afficher"; break;
case "Prenotazione non confermata":             $messaggio = "La reservation n'est pas confirme"; break;
case "Prenotazione confermata, caparra non pagata":     $messaggio = "La reservation est confirme, mais le depot n'est pas encore recu"; break;
case "Caparra pagata":                          $messaggio = "Depot paye"; break;
case "Tutto pagato":                            $messaggio = "Paye en complet"; break;
case "durante l'inserimento dei dati del cliente quando si inserisce una nuova prenotazione":   $messaggio = "lors de l'insertion des donnees du client quand vous inserez une nouvelle reservation"; break;
case "Utilizzando il tasto 'cancella' dalla pagina di inserimento dei dati del cliente anche questa prenotazione verrà cancellata":$messaggio = "En utilisant le bouton 'ANNULER' sur la page d'insertion de donnee, cette reservation sera aussi annulee "; break;
case "L'utente amministratore può disabilitare o cambiare la durata di queste prenotazioni da 'configura e personalizza'":      $messaggio = "Le compte administrateur du systeme peut etre utiliser pour annuler ou changer la duree de ses reservation dans l'option 'Configurer et Personnaliser'"; break;
case "Trascinare l'inizio o la fine di una prenotazione per cambiare la data di arrivo o partenza":     $messaggio = "Deplacer le debut ou le depart pour changer la date depart ou d'arrivee"; break;
case "":                $messaggio = ""; break;
case "":                $messaggio = ""; break;

} # fine switch ($messaggio)

?>
