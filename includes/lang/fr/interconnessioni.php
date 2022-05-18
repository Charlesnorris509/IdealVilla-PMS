<?php

switch ($messaggio) {

case "Interconnessioni":                        $messaggio = "Interconnections"; break;
case "Aggiornamento eseguito con successo":     $messaggio = "Mise a jour Complete"; break;
case "Non si è potuto portare a termine l'<div style=\"display: inline; color: red;\">aggiornamento</div>":     $messaggio = "<div style=\"display: inline; color: red;\">Mise a jour</div> echoue"; break;
case "OK":                                      $messaggio = "OK"; break;
case "<div style=\"display: inline; color: red;\"><b>ATTENZIONE</b></div>: premendo su <b>\"<i>Continua</i>\"</b> tutti i dati del <i>database attuale</i> verranno <b>cancellati</b>":     $messaggio = "<div style=\"display: inline; color: red;\"><b>Attention</b></div>: si vous pressez <b>\"<i>Continuer</i>\"</b> toutes les donnee <i>sur la base de donnee actuelles</i> serony <b>effacer</b>"; break;
case "Continua":                                $messaggio = "Continuer"; break;
case "Subordinazione creata":                   $messaggio = "Subordination creer"; break;
case "Impossibile effettuare il collegamento, controllare i dati immessi":      $messaggio = "Connection refuser, verifier les donnees inserees"; break;
case "Subordinazione cancellata":               $messaggio = "Subordination effacer"; break;
case "Torna indietro":                          $messaggio = "Retourner"; break;
case "Interconnessioni con sorgenti esterne di dati":   $messaggio = "Interconnections avec des sources de donnees externe"; break;
case "Cancella":                                $messaggio = "Effacer"; break;
case "la subordinazione":                       $messaggio = "subordination"; break;
case "Subordinazione ad un'altra installazione di hoteldruid":  $messaggio = "Subordination a une autre installation de l'IdealVilla PMS"; break;
case "Con la subordinazione non si potranno inserire nuovi dati o apportare modifiche, ma solo importare i dati dall'installazione principale":     $messaggio = "Avec cette subordination vous ne serez pas capable d'inserrez ou d'appliquer des modifications, seulement pour importer des donnees de installation maitre"; break;
case "Subordina questa installazione di hoteldruid a quella che si trova all'indirizzo":        $messaggio = "Subordine cette installation de l'IdealVilla PMS a la derniere qui est places(chemin d'access au fichier"; break;
case "Password":                                $messaggio = "Mot de passe"; break;
case "Commento da aggiungere al titolo di questa installazione":        $messaggio = "Commentaire a ajouter aux titre de cette installation"; break;
case "Crea la subordinazione":                  $messaggio = "Creer subordination"; break;
case "Usa compressione":                        $messaggio = "Utiliser le format de compression"; break;
case "Utente per l'aggiornamento remoto delle interconnessioni":        $messaggio = "Utilisateur pouvant mettre a jour l'interconnection a distance"; break;
case "Utente per l'aggiornamento remoto modificato":    $messaggio = "Utilisateur pouvant mettre a jour l'interconnection a distance modifier"; break;
case "Modifica":                                $messaggio = "Modifier"; break;
case "Aggiornamento codice sorgente eseguito con successo":     $messaggio = "Code Source mise a jour avec success"; break;
case "amministratore o utente con i privilegi per creare backup":       $messaggio = "seulement l'administrateur ou un utilisateur avec des priviledge peut creer un backup"; break;
case "nome utente":                             $messaggio = "nom d'utiliateur"; break;
case "Versione locale diversa da quella remota":        $messaggio = "La version local est differente de celle accessible a distance"; break;
case "Non si è potuto scaricare il backup remoto":      $messaggio = "Il n'est pas possible de sauvegarder le backup"; break;
case "Non si è potuto stabilire la connessione":        $messaggio = "Il n'est pas  possible d'establir la connection"; break;
case "Non ho i permassi di scrittura sulla cartella dati":      $messaggio = "vous n'avez pas la premissions d'ecrire sur le dati folder"; break;
case "Prova a mantenere i dati degli anni non presenti nell'installazione remota":      $messaggio = "Essayer de garder des donnees des annnees indisponible dans l'installation a distance"; break;
case "nella pagina delle interconnessioni":     $messaggio = "dans la page d'interconnections"; break;
case "Modifica la regola di assegnazione":      $messaggio = "Modifier les  regles d'assignement"; break;
case "La prenotazione cancellata non era presente nel database":        $messaggio = "la reservation effacee n'etait pas presente dans la base de donnee"; break;
case "gruppo":                                  $messaggio = "groupe"; break;
case "Attenzione":                              $messaggio = "Attention"; break;
case "carta di credito non salvata":            $messaggio = "Les donnees de carte de credit non pas ete sauvegarder"; break;
case "":                $messaggio = ""; break;
case "":                $messaggio = ""; break;

} # fine switch ($messaggio)

?> 
