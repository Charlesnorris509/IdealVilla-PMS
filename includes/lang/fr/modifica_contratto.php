<?php

switch ($messaggio) {

case "Modifica Documento":                      $messaggio = "Modifier le Document"; break;
case "Torna indietro":                          $messaggio = "Retourner"; break;
case "documento":                               $messaggio = "document"; break;
case "Modifica il documento":                   $messaggio = "Modifier le document"; break;
case "Salva le modifiche":                      $messaggio = "Sauvegarder les changements"; break;
case "Visualizza il documento":                 $messaggio = "Afficher le document"; break;
case "Documento salvato":                       $messaggio = "Document sauvegarde"; break;
case "Variabili":                               $messaggio = "Variables"; break;
case "Limiti":                                  $messaggio = "Limites de"; break;
case "Aggiungi":                                $messaggio = "Ajouter"; break;
case "Cambia":                                  $messaggio = "Changer"; break;
case "Formato del documento":                   $messaggio = "Format du document"; break;
case "EMAIL":                                   $messaggio = "EMAIL"; break;
case "Oggetto":                                 $messaggio = "Subject"; break;
case "Formato del documento cambiato":          $messaggio = "Format du document change"; break;
case "Oggetto cambiato":                        $messaggio = "Subject change"; break;
case "Allegato":                                $messaggio = "Attachement"; break;
case "Elimina":                                 $messaggio = "Effacer"; break;
case "Mandare una copia bcc":                   $messaggio = "enoyer une copie en 'bcc'"; break;
case "al mittente":                             $messaggio = "a l'expediteur"; break;
case "all'indirizzo":                           $messaggio = "a l'addresse"; break;
case "Allegato salvato":                        $messaggio = "Attachement sauvegarde"; break;
case "Allegato eliminato":                      $messaggio = "Attachement efface"; break;
case "Copie bcc da spedire cambiate":           $messaggio = "Les copies 'Bcc'ont ete modifie et envoyee"; break;
case "ripetizione prenotazioni":                $messaggio = "Repetition de reservation"; break;
case "ripetizione ospiti":                      $messaggio = "r??p??tition d'invit??"; break;
case "ripetizione costi aggiuntivi":            $messaggio = "Repetition de couts supplementaire"; break;
case "SOSTITUISCI CON PARTE DA RIPETERE PER OGNI PRENOTAZIONE": $messaggio = "REMPLACER PAR LA PARTIE A REPETER POUR CHAQUE RESERVATION"; break;
case "SOSTITUISCI CON LISTA OSPITI IN PRENOTAZIONE":    $messaggio = "REMPLACER PAR LA LISTE DES INVIT??S EN R??SERVATION"; break;
case "SOSTITUISCI CON LISTA COSTI IN PRENOTAZIONE":     $messaggio = "REMPLACER AVEC LA LISTE DES CO??TS EN R??SERVATION"; break;
case "Salva i documenti con numero progressivo nella cartella": $messaggio = "Enregistrer les documents avec un num??ro progressif dans le r??pertoire"; break;
case "I documenti non verranno salvati":        $messaggio = "Les documents ne seront pas enregistr??s"; break;
case "I documenti verranno salvati nella cartella":     $messaggio = "Les documents ne seront pas enregistr??s dans le repertoire"; break;
case "ripetizione array":                       $messaggio = "Repetition de Tableau"; break;
case "SOSTITUISCI CON PARTE DA RIPETERE PER OGNI VALORE DELL'ARRAY":    $messaggio = "REMPLACER PAR LA PARTIE ?? R??P??TER POUR CHAQUE VALEUR DE TABLEAU"; break;
case "Errore nelle ripetizioni e condizioni annidate":  $messaggio = "Erreur dans les boucles et conditions imbriqu??es"; break;
case "parte sotto condizione":                  $messaggio = "pi??ce sous condition"; break;
case "nome_variabile":                          $messaggio = "nom de variable"; break;
case "valore":                                  $messaggio = "valeur"; break;
case "SOSTITUISCI CON PARTE DA MOSTRARE SOLO SE E' SODDISFATTA LA CONDIZIONE PRECEDENTE":       $messaggio = "REMPLACER PAR LA PI??CE ?? MONTRER UNIQUEMENT SI LA CONDITION PR??C??DENTE EST SATISFAIT"; break;
case "OPPURE":                                  $messaggio = "OU"; break;
case "Variabili personalizzate e condizioni del documento":     $messaggio = "Variables personnalis??es et conditions du document"; break;
case "Condividi il numero progressivo con":     $messaggio = "Partager un num??ro progressif avec"; break;
case "il documento":                            $messaggio = "document"; break;
case "Usa come nome del file":                  $messaggio = "Utiliser comme nom de fichier"; break;
case "il nome del documento":                   $messaggio = "Le nom du document"; break;
case "un altro nome":                           $messaggio = "autre noms"; break;
case "non condivider?? il numero progressivo con nessun documento":      $messaggio = "ne partagera pas de num??ro progressif avec aucun document"; break;
case "condivider?? il numero progressivo con il documento":      $messaggio = "partagera le num??ro progressif avec le document"; break;
case "I file verranno salvati con il nome del documento":       $messaggio = "Les fichiers seront enregistr??s avec le nom du document"; break;
case "I file verranno salvati con il nome":     $messaggio = "Les fichiers seront enregistr??s avec le meme nom"; break;
case "Salva automaticamente il documento":      $messaggio = "Enregistrer le document automatiquement"; break;
case "mai":                                     $messaggio = "jamais"; break;
case "alla registrazione dell'entrata":         $messaggio = "a l'enregistrement"; break;
case "alla registrazione dell'uscita":          $messaggio = "au depart"; break;
case "Il documento verr?? salvato automaticamente":      $messaggio = "Le document sera enregistr?? automatiquement"; break;
case "Il documento non verr?? salvato automaticamente":  $messaggio = "Le document ne sera pas enregistr?? automatiquement"; break;
case "multi-lingua":                            $messaggio = "multi-langue"; break;
case "in":                                      $messaggio = "dans"; break;
case "Avviso":                                  $messaggio = "Attention"; break;
case "nei documenti in formato multi-lingua non ?? possibile ripetere una sola parte con i tag [r] e [/r], il documento viene ripetuto interamente per ogni prenotazione":  $messaggio = "avec le format multilingue, il n'est pas possible de r??p??ter une seule partie sous les balises [r] et [/r], le document est r??p??t?? enti??rement pour chaque r??servation"; break;
case "predefinito":                             $messaggio = "defaut"; break;
case "fai predefinito":                         $messaggio = "faire defaut"; break;
case "Comprimi i file":                         $messaggio = "Compresser les fichiers"; break;
case "Il documento non verr?? salvato compresso su disco":       $messaggio = "Le document ne sera pas enregistr?? compress?? sur disque"; break;
case "Il documento verr?? salvato compresso su disco":   $messaggio = "Le document sera enregistr?? compress?? sur disque"; break;
case "Formato dell'email":                      $messaggio = "Format Email"; break;
case "testo semplice":                          $messaggio = "Texte Claire"; break;
case "html":                                    $messaggio = "html"; break;
case "Formato dell'email cambiato":             $messaggio = "Format Email change"; break;
case "ripetizione pagamenti":                   $messaggio = "Repetition de paiements"; break;
case "ripetizione unit??":                       $messaggio = "Repetition des unites"; break;
case "SOSTITUISCI CON LISTA PAGAMENTI":         $messaggio = "REMPLACER PAR LA LISTE DE PAIEMENT"; break;
case "Intestazione html personalizzata":        $messaggio = "T??te html personnalis??e"; break;
case "Modifica l'intestazione html":            $messaggio = "Modfier l'ent??te html "; break;
case "Modifica la chiusura html":               $messaggio = "Modifier le pied html"; break;
case "Intestazione html cambiata":              $messaggio = "Entete HTML modifie"; break;
case "Chiusura html cambiata":                  $messaggio = "Pied HTML modifie"; break;
case "Incrementa il numero progressivo ad ogni sua apparizione":        $messaggio = "Augmentez le nombre progressif ?? chaque fois qu'il appara??t"; break;
case "Ogni documento avr?? un unico numero progressivo": $messaggio = "Chaque document aura un num??ro progressif unique"; break;
case "Il numero progressivo verr?? incrementato ogni volta che compare nel documento":   $messaggio = "Le nombre progressif sera augment?? ?? chaque fois qu'il appara??tra dans le document"; break;
case "Estensione con cui vedere e scaricare il documento":      $messaggio = "Extension pour visualiser et t??l??charger le document"; break;
case "predefinita":                             $messaggio = "defaut"; break;
case "personalizzata":                          $messaggio = "Personaliser"; break;
case "Estensione cambiata":                     $messaggio = "Extension changee"; break;
case "Considera questo documento come una API": $messaggio = "Consid??rez ce document comme une API"; break;
case "Il documento verr?? considerato come una API":     $messaggio = "Le document sera consid??r?? comme une API"; break;
case "Il documento non verr?? pi?? considerato come una API":     $messaggio = "Le document ne sera pas consid??r?? comme une API"; break;
case "Password":                                $messaggio = "Mot de passe"; break;
case "La password per la API del documento ?? stata cambiata":   $messaggio = "Le mot de passe de l'API de document a ??t?? modifi??"; break;
case "Esempi di URL per chiamare il documento": $messaggio = "Exemples d'URL pour appeler le document"; break;
case "Tutte le prenotazioni dell'anno":         $messaggio = "Toutes les reservations de l'annee"; break;
case "Mostra il documento come visto dall'utente":      $messaggio = "Afficher le document tel qu'il est vu par l'utilisateur"; break;
case "L'utente per la API del documento ?? stato cambiato":      $messaggio = "L'utilisateur de l'API de document a ??t?? modifi??"; break;
case "Nota":                                    $messaggio = "Notice"; break;
case "se la variabile":                         $messaggio = "si la variable"; break;
case "non ?? presente nella URL allora verranno usate le prenotazioni dell'anno corrente":       $messaggio = "n'est pas pr??sent dans l'URL, les r??servations de l'ann??e en cours seront utilis??es"; break;
case "Tutte le prenotazioni presenti dal":      $messaggio = "Toutes les r??servations pr??sentes ?? partir de"; break;
case "al":                                      $messaggio = "a"; break;
case "si possono usare anche le parole":        $messaggio = "vous pouvez aussi utiliser les mots"; break;
case "come date":                               $messaggio = "comme date"; break;
case "e":                                       $messaggio = "et"; break;
case "Tutte le prenotazioni con numero dal":    $messaggio = "Toutes les r??servations avec des num??ros de"; break;
case "Altri esempi dell'uso della variabile":   $messaggio = "Autres exemples d'utilisation de la variable"; break;
case "Tutte le prenotazioni inserite dal":      $messaggio = "Toutes les r??servations ins??r??es ?? partir de"; break;
case "Tutti gli arrivi del":                    $messaggio = "Toutes les arriv??es sur"; break;
case "Tutti le partenze del":                   $messaggio = "Toutes les departs sur"; break;
case "Tutti i clienti":                         $messaggio = "Tous les clients"; break;
case "escludendo gli ospiti":                   $messaggio = "excluyant les invites"; break;
case "inclusi gli ospiti":                      $messaggio = "incluyant les invites"; break;
case "ripetizione documenti salvati":           $messaggio = "sauvegarder les repetition de documents"; break;
case "formato dell'utente":                     $messaggio = "format pour l'utilisateur"; break;
case "Formato dei soldi":                       $messaggio = "Format de l'argent"; break;
case "Formato delle date":                      $messaggio = "Format des dates"; break;
case "Formati predefiniti del documento cambiati":      $messaggio = "Format Defaut pour le document changer"; break;
case "i documenti esistenti non verranno mai sovrascritti, ogni volta che si chiama la API verr?? salvato un nuovo documento":      $messaggio = "les documents existants ne seront jamais ??cras??s, chaque fois que l'API est appel??e un nouveau document sera sauveragrde"; break;
case "Tutti i pagamenti nella cassa":           $messaggio = "Tous les payments dans la caisse "; break;
case "nome_cassa":                              $messaggio = "nom_de_la_caisse"; break;
case "":                $messaggio = ""; break;
case "":                $messaggio = ""; break;

} # fine switch ($messaggio)

?> 
