<?php

switch ($messaggio) {

case "MENU":                            $messaggio = "MENU"; break;
case "PRENOTAZIONE":                    $messaggio = "RESERVATION"; break;
case "TABELLE":                         $messaggio = "TABLEAU"; break;
case "GENNAIO":                         $messaggio = "JANVIER"; break;
case "FEBBRAIO":                        $messaggio = "FEVRIER"; break;
case "MARZO":                           $messaggio = "MARS"; break;
case "APRILE":                          $messaggio = "AVRIL"; break;
case "MAGGIO":                          $messaggio = "MAI"; break;
case "GIUGNO":                          $messaggio = "JUIN"; break;
case "LUGLIO":                          $messaggio = "JUILLER"; break;
case "AGOSTO":                          $messaggio = "AOUT"; break;
case "SETTEMBRE":                       $messaggio = "SEPTEMBRE"; break;
case "OTTOBRE":                         $messaggio = "OCTOBRE"; break;
case "NOVEMBRE":                        $messaggio = "NOVEMBRE"; break;
case "DICEMBRE":                        $messaggio = "DECEMBRE"; break;
case "PRENOTAZIONI":                    $messaggio = "RESERVATIONS"; break;
case "SPESE":                           $messaggio = "DEPENSES"; break;
case "CASSE":                           $messaggio = "CAISSE"; break;
case "TARIFFE":                         $messaggio = "TARIFF"; break;
case "CLIENTI":                         $messaggio = "CLIENTS"; break;
case "INSERIRE":                        $messaggio = "INSERER"; break;
case "CLIENTE":                         $messaggio = "CLIENT"; break;
case "PREZZI":                          $messaggio = "PRIX"; break;
case "REGOLE":                          $messaggio = "REGLE"; break;
case "CONFIGURA":                       $messaggio = "CONFIGURER"; break;
case "TUTTE":                           $messaggio = "TOUS"; break;
case "CORRENTI":                        $messaggio = "ACTUEL"; break;
case "FUTURE":                          $messaggio = "FUTUR"; break;
case "ARRIVI":                          $messaggio = "ARRIVES"; break;
case "PARTENZE":                        $messaggio = "DEPARTS"; break;
case "MESSAGGI":                        $messaggio = "MESSAGES"; break;
case "ENTRATE&nbsp;PREN.":              $messaggio = "RES.&nbsp;PAYMENTS"; break;
case "UTENTI":                          $messaggio = "UTILISATEURS"; break;
case "SITO WEB":                        $messaggio = "WEBSITE"; break;
case "INTERCONN.":                      $messaggio = "INTERCONN."; break;
case "BACKUP":                          $messaggio = "BACKUP"; break;
case "STATISTICHE":                     $messaggio = "STATISTIC"; break;
case "INVENTARIO":                      $messaggio = "INVENTAIRE"; break;
case "CERCA":                           $messaggio = "RECHERCHE"; break;
case "DOCUMENTI":                       $messaggio = "DOCUMENTS"; break;
case "P.TO&nbsp;VENDITA":               $messaggio = "POINT&nbsp;OF&nbsp;SALE"; break;
case "NUMERO":                          $messaggio = "NUMERO"; break;
case "VAI":                             $messaggio = "ALLER"; break;
case "COSTI AGGIUNTIVI":                $messaggio = "COUTS SUPPLEMENTAIRES"; break;
case "CAPARRE E TASSE":                 $messaggio = "DEPOTS ET TAXES"; break;
case "PARTENZE E CORRENTI":             $messaggio = "DEPARTS. ET ACTUALITE"; break;
case "":                $messaggio = ""; break;
case "":                $messaggio = ""; break;

# Simple theme top menu drop-down menus widths (leave defaults if widths are OK)
case "insert-ddw":                      $messaggio = "100px"; break;
case "tables-ddw":                      $messaggio = "100px"; break;
case "months-ddw":                      $messaggio = "86px"; break;
case "reservations-ddw":                $messaggio = "150px"; break;
case "clients-ddw":                     $messaggio = "15em"; break;
case "rates-ddw":                       $messaggio = "150px"; break;
case "configure-ddw":                   $messaggio = "86px"; break;

} # fine switch ($messaggio)

?>
