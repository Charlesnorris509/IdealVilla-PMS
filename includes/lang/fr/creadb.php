<?php

switch ($messaggio) {

case "Inserimento dei dati permanenti":         $messaggio = "Insérez les données permanentes.."; break;
case "Inserisci questi dati per poi creare il database":        $messaggio = "Insérez ces données pour créer une base de données"; break;
case "Nome del database da utilizzare":         $messaggio = "Nom de la base de données à utiliser"; break;
case "Nome del computer a cui collegarsi":      $messaggio = "Nom de la base de données à se connecter sur"; break;
case "Numero della porta a cui collegarsi":     $messaggio = "Numéro du port auquel se connecter"; break;
case "Nome per l'autenticazione al database":   $messaggio = "Nom d'utilisateur pour l'authentification de la base de données"; break;
case "Parola segreta per l'autenticazione al database": $messaggio = "Mot de passe pour l'authentification de la base de données"; break;
case "Caricare la libreria dinamica \"pgsql.so\" o \"mysql.so\"":       $messaggio = "Chargez la bibliothèque dynamique \"pgsql.so\" ou \"mysql.so\""; break;
case "No":                                      $messaggio = "Non"; break;
case "Si":                                      $messaggio = "Oui"; break;
case "scegliere si se non viene caricata automaticamente da php":       $messaggio = "choisissez oui s'il n'est pas chargé automatiquement par php"; break;
case "Nome del database a cui collegarsi temporaneamente":      $messaggio = "Nom de la base de données à laquelle se connecter temporairement"; break;
case "Numero di unità da gestire":              $messaggio = "Nombre d'unités à gérer"; break;
case "Crea il database":                        $messaggio = "Creer une base de donnee"; break;
case "Database creato":                         $messaggio = "Base de données créée"; break;
case "Massimo numero di occupanti":             $messaggio = "nombre maximum de personnes qu'elle peut héberger"; break;
case "Numero (o nome) piano":                           $messaggio = "Numéro d'étage (ou nom)"; break;
case "Numero (o nome) casa":                            $messaggio = "Numéro d'appartment (ou nom)"; break;
case "Non è stato possibile creare il database, controllare i privilegi dell' utente, il nome del database o se esiste già un database chiamato":
                                                $messaggio = "Il n'a pas été possible de créer la base de données, de vérifier les privilèges de l'utilisateur, le nom de la base de données ou s'il existe déjà une base de données appelée"; break;
case "I dati inseriti per il collegamento al database non sono esatti o il database non è in ascolto":  $messaggio = "Les données insérées pour la connexion à la base de données ne sont pas correctes ou la base de données n'écoute pas"; break;
case "se postgres assicurarsi che venga avviato con -i e di avere i permessi giusti in pg_hba.conf":    $messaggio = "si c'est postgres, assurez-vous qu'il est démarré avec -i et que vous avez les bonnes autorisations dans pg_hba.conf"; break;
case "Torna indietro":                          $messaggio = "Retourner"; break;
case "Dati inseriti":                           $messaggio = "Donnee inseree"; break;
case "Tutti i dati permanenti sono stati inseriti":     $messaggio = "Toutes les données permanentes ont été insérées"; break;
case "Non ho i permessi di scrittura sulla directory dati, cambiarli e reiniziare l'installazione":     $messaggio = "Je n'ai pas les droits d'écriture sur le dossier dati, modifiez-les et recommencez l'installation"; break;
case "Tipo di database":                        $messaggio = "Type de base de donnee"; break;
case "Database già esistente":                  $messaggio = "Base de données existante"; break;
case "Se già esistente e non vuoto usare un prefisso non presente nel database per il nome delle tabelle":      $messaggio = "S'il existe déjà et n'est pas vide, utilisez un préfixe non présent dans la base de données pour les noms de tables"; break;
case "Normalmete 5432 o 5433 per Postgresql o 3306 per Mysql":  $messaggio = "Normalement 5432 ou 5433 pour Postgresql ou 3306 pour Mysql"; break;
case "solo per Postgresql con database non esistente":  $messaggio = "uniquement pour Postgresql avec une base de données inexistante"; break;
case "Prefisso nel nome delle tabelle":         $messaggio = "Préfixe dans le nom des tables"; break;
case "opzionale, utile per più installazioni di HotelDruid nello stesso database":      $messaggio = "facultatif, utile pour plus d'installations de l'idealVilla dans la même base de données"; break;
case "Il prefisso del nome delle tabelle è sbagliato (accettate solo lettere minuscole, numeri e _ , primo carattere lettera)":     $messaggio = "Le préfixe des noms de tables est erroné (uniquement les lettres minuscules acceptées, les chiffres et _ , première lettre de caractère)"; break;
case "Nome delle unità da gestire":             $messaggio = "Nom des unités à gérer"; break;
case "Euro":                                    $messaggio = "Euros"; break;
case "Benvenuto a HotelDruid!":                 $messaggio = "Bievenue a l'IdealVilla"; break;
case "Questi sono alcuni semplici passi che puoi seguire per configurare le funzionalità di base di HotelDruid":   $messaggio = "Voici quelques étapes simples que vous pouvez suivre pour configurer les fonctionnalités de base d'IdealVilla PMS"; break;
case "utilizzando l'apposito tasto al di sotto di essa":        $messaggio = "en utilisant le bouton spécifique en dessous"; break;
case "pagina inserimento prezzi":               $messaggio = "page pour insérer les prix"; break;
case "vedi passo successivo":                   $messaggio = "Voir la prochaines etapes"; break;
case "pagina inserimento regole":               $messaggio = "page pour insérer des règles"; break;
case "Se questo server web è pubblico si può abilitare il login e creare nuovi utenti dalla":   $messaggio = "S'il s'agit d'un serveur Web public, vous pouvez activer la connexion et créer de nouveaux utilisateurs à partir du"; break;
case "pagina gestione utenti":                  $messaggio = "page de gestion des utilisateurs"; break;
case "Vai alla pagina":                         $messaggio = "Allez à la"; break;
case "configura e personalizza":                $messaggio = "configurer et personaliser"; break;
case "per cambiare il nome della valuta, abilitare la registrazione delle entrate, inserire i metodi di pagamento, ed impostare molte altre opzioni":       $messaggio = "page pour changer de devise(monnaie), l'insertion des enregistrements, insérer des méthodes de paiement et configurer beaucoup plus d'options"; break;
case "Inserisci il numero di tariffe, un nome per ciascuna di esse ed i prezzi corrispondenti dalla":   $messaggio = "Insérez le nombre de tarifs, un nom pour chacun d'entre eux et les prix correspondants a la"; break;
case "questo programma":                        $messaggio = "Ce programe"; break;
case "Nome delle unità singole da gestire":     $messaggio = "Nom des unités individuelles à gérer"; break;
case "Numero di unità singole da gestire":      $messaggio = "Numero des unités individuelles à gérer"; break;
case "non incluse nelle unità normali":         $messaggio = "non inclus dans les unités normales"; break;
case "":                        $messaggio = ""; break;
case "":                        $messaggio = ""; break;

} # fine switch ($messaggio)

?>
