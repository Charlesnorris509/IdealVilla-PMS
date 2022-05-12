<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2022 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU Affero General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    any later version accepted by Marco Maria Francesco De Santis, which
#    shall act as a proxy as defined in Section 14 of version 3 of the
#    license.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU Affero General Public License for more details.
#
#    You should have received a copy of the GNU Affero General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
##################################################################################

$pag = "visualizza_contratto.php";
$titolo = "IdealVilla: Documents";
$extra_head = "";

$var_pag = array();
$var_pag[0] = 'origine';
$var_pag[1] = 'id_prenota';
$var_pag[2] = 'numero_contratto';
$var_pag[3] = 'num_costo_agg_sel';
$var_pag[4] = 'num_ripeti';
$var_pag[5] = 'lista_prenota';
$var_pag[6] = 'lista_clienti';
$var_pag[7] = 'lista_cassa';
$var_pag[8] = 'id_transazione';
$var_pag[9] = 'n_file';
$var_pag[10] = 'sovrascrivi';
$var_pag[11] = 'origine_vecchia';
$var_pag[12] = 'cancella';
$var_pag[13] = 'pcanc';
$var_pag[14] = 'data_inizio_selezione';
$var_pag[15] = 'data_fine_selezione';
$var_pag[16] = 'idclienti';
$var_pag[17] = 'cont_salva';
$var_pag[18] = 'contr_corr';
$var_pag[19] = 'manda_mail';
$var_pag[20] = 'numero_email';
$n_var_pag = 21;
$num2 = 1;
if (isset($_POST['num_ripeti'])) $num2 = (int) $_POST['num_ripeti'];
elseif (isset($_GET['num_ripeti'])) $num2 = (int) $_GET['num_ripeti'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "cognome_$num1";
$var_pag[$n_var_pag++] = "nome_$num1";
$var_pag[$n_var_pag++] = "soprannome_$num1";
$var_pag[$n_var_pag++] = "titolo_$num1";
$var_pag[$n_var_pag++] = "sesso_$num1";
$var_pag[$n_var_pag++] = "data_nascita_$num1";
$var_pag[$n_var_pag++] = "documento_$num1";
$var_pag[$n_var_pag++] = "tipo_documento_$num1";
$var_pag[$n_var_pag++] = "citta_documento_$num1";
$var_pag[$n_var_pag++] = "regione_documento_$num1";
$var_pag[$n_var_pag++] = "nazione_documento_$num1";
$var_pag[$n_var_pag++] = "scadenza_documento_$num1";
$var_pag[$n_var_pag++] = "citta_nascita_$num1";
$var_pag[$n_var_pag++] = "regione_nascita_$num1";
$var_pag[$n_var_pag++] = "nazione_nascita_$num1";
$var_pag[$n_var_pag++] = "cittadinanza_$num1";
$var_pag[$n_var_pag++] = "codice_lingua_$num1";
$var_pag[$n_var_pag++] = "nazione_$num1";
$var_pag[$n_var_pag++] = "regione_$num1";
$var_pag[$n_var_pag++] = "citta_$num1";
$var_pag[$n_var_pag++] = "via_$num1";
$var_pag[$n_var_pag++] = "numcivico_$num1";
$var_pag[$n_var_pag++] = "telefono_$num1";
$var_pag[$n_var_pag++] = "telefono2_$num1";
$var_pag[$n_var_pag++] = "telefono3_$num1";
$var_pag[$n_var_pag++] = "codice_fiscale_$num1";
$var_pag[$n_var_pag++] = "partita_iva_$num1";
$var_pag[$n_var_pag++] = "fax_$num1";
$var_pag[$n_var_pag++] = "cap_$num1";
$var_pag[$n_var_pag++] = "email_$num1";
$var_pag[$n_var_pag++] = "email2_$num1";
$var_pag[$n_var_pag++] = "email_certificata_$num1";
$var_pag[$n_var_pag++] = "id_data_inizio_$num1";
$var_pag[$n_var_pag++] = "data_inizio_$num1";
$var_pag[$n_var_pag++] = "id_data_fine_$num1";
$var_pag[$n_var_pag++] = "num_periodi_$num1";
$var_pag[$n_var_pag++] = "data_fine_$num1";
$var_pag[$n_var_pag++] = "orario_entrata_stimato_$num1";
$var_pag[$n_var_pag++] = "orario_registrazione_entrata_$num1";
$var_pag[$n_var_pag++] = "orario_registrazione_uscita_$num1";
$var_pag[$n_var_pag++] = "origine_prenotazione_$num1";
$var_pag[$n_var_pag++] = "nome_tariffa_$num1";
$var_pag[$n_var_pag++] = "costo_tariffa_$num1";
$var_pag[$n_var_pag++] = "tariffesettimanali_$num1";
$var_pag[$n_var_pag++] = "percentuale_tasse_tariffa_$num1";
$var_pag[$n_var_pag++] = "sconto_$num1";
$var_pag[$n_var_pag++] = "caparra_$num1";
$var_pag[$n_var_pag++] = "commissioni_$num1";
$var_pag[$n_var_pag++] = "num_persone_$num1";
$var_pag[$n_var_pag++] = "unita_occupata_$num1";
$var_pag[$n_var_pag++] = "unita_assegnabili_$num1";
$var_pag[$n_var_pag++] = "num_persone_tipo_1_$num1";
$var_pag[$n_var_pag++] = "num_persone_tipo_2_$num1";
$var_pag[$n_var_pag++] = "num_persone_tipo_3_$num1";
$var_pag[$n_var_pag++] = "pagato_$num1";
$var_pag[$n_var_pag++] = "costo_tot_$num1";
$var_pag[$n_var_pag++] = "n_letti_agg_$num1";
$var_pag[$n_var_pag++] = "numero_prenotazione_$num1";
$var_pag[$n_var_pag++] = "codice_prenotazione_$num1";
$var_pag[$n_var_pag++] = "id_anni_prec_$num1";
$var_pag[$n_var_pag++] = "data_inserimento_prenotazione_$num1";
$var_pag[$n_var_pag++] = "utente_inserimento_prenotazione_$num1";
$var_pag[$n_var_pag++] = "commento_$num1";
$var_pag[$n_var_pag++] = "promemoria_entrata_$num1";
$var_pag[$n_var_pag++] = "promemoria_uscita_$num1";
$var_pag[$n_var_pag++] = "metodo_pagamento_caparra_$num1";
$var_pag[$n_var_pag++] = "num_costi_aggiuntivi_$num1";
$var_pag[$n_var_pag++] = "num_comm_pers_passa_$num1";
$num4 = 0;
if (isset($_POST["num_costi_aggiuntivi_$num1"])) $num4 = (int) $_POST["num_costi_aggiuntivi_$num1"];
elseif (isset($_GET["num_costi_aggiuntivi_$num1"])) $num4 = (int) $_GET["num_costi_aggiuntivi_$num1"];
for ($num3 = 0 ; $num3 < $num4 ; $num3++) {
$var_pag[$n_var_pag++] = "nome_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "moltiplica_max_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "giorni_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "tipo_persona_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "data_inserimento_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "utente_inserimento_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "val_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "percentuale_tasse_costo_agg$num3"."_$num1";
$var_pag[$n_var_pag++] = "valore_giornaliero_max_costo_agg$num3"."_$num1";
} # fine for $num3
$var_pag[$n_var_pag++] = "num_pagamenti_$num1";
$num4 = 0;
if (isset($_POST["num_pagamenti_$num1"])) $num4 = (int) $_POST["num_pagamenti_$num1"];
elseif (isset($_GET["num_pagamenti_$num1"])) $num4 = (int) $_GET["num_pagamenti_$num1"];
for ($num3 = 0 ; $num3 < $num4 ; $num3++) {
$var_pag[$n_var_pag++] = "data_paga$num3"."_$num1";
$var_pag[$n_var_pag++] = "utente_paga$num3"."_$num1";
$var_pag[$n_var_pag++] = "metodo_paga$num3"."_$num1";
$var_pag[$n_var_pag++] = "saldo_paga$num3"."_$num1";
$var_pag[$n_var_pag++] = "valuta_paga$num3"."_$num1";
$var_pag[$n_var_pag++] = "tasso_cambio_paga$num3"."_$num1";
$var_pag[$n_var_pag++] = "valore_valuta_paga$num3"."_$num1";
} # fine for $num3
$num4 = 0;
if (isset($_POST["num_comm_pers_passa_$num1"])) $num4 = (int) $_POST["num_comm_pers_passa_$num1"];
elseif (isset($_GET["num_comm_pers_passa_$num1"])) $num4 = (int) $_GET["num_comm_pers_passa_$num1"];
for ($num3 = 0 ; $num3 < $num4 ; $num3++) {
$var_pag[$n_var_pag++] = "nome_comm_pers_passa_$num3"."_$num1";
$num5 = "";
if (isset($_POST["nome_comm_pers_passa_$num3"."_$num1"])) $num5 = (string) $_POST["nome_comm_pers_passa_$num3"."_$num1"];
elseif (isset($_GET["nome_comm_pers_passa_$num3"."_$num1"])) $num5 = (string) $_GET["nome_comm_pers_passa_$num3"."_$num1"];
if (strcmp($num5,"")) $var_pag[$n_var_pag++] = "commento_personalizzato_$num5"."_$num1";
} # fine for $num3
} # fine for $num1
$num2 = 0;
if (isset($_POST['numero_email'])) $num2 = (int) $_POST['numero_email'];
elseif (isset($_GET['numero_email'])) $num2 = (int) $_GET['numero_email'];
for ($num1 = 1 ; $num1 <= $num2 ; $num1++) {
$var_pag[$n_var_pag++] = "mittente_email$num1";
$var_pag[$n_var_pag++] = "destinatario_email$num1";
$var_pag[$n_var_pag++] = "oggetto_email$num1";
$var_pag[$n_var_pag++] = "allega$num1";
$var_pag[$n_var_pag++] = "testo_email$num1";
} # fine for $num1

include("./costanti.php");
include(C_DATI_PATH."/dati_connessione.php");
include("./includes/funzioni_$PHPR_DB_TYPE.php");
$numconnessione = connetti_db($PHPR_DB_NAME,$PHPR_DB_HOST,$PHPR_DB_PORT,$PHPR_DB_USER,$PHPR_DB_PASS,$PHPR_LOAD_EXT);
include("./includes/funzioni.php");
include("./includes/funzioni_contratti.php");
include("./includes/funzioni_testo.php");
include("./includes/funzioni_email.php");
$tablecontratti = $PHPR_TAB_PRE."contratti";
$tableprenota = $PHPR_TAB_PRE."prenota".$anno;
$tableprenotacanc = $PHPR_TAB_PRE."prenotacanc".$anno;
$tablecostiprenota = $PHPR_TAB_PRE."costiprenota".$anno;
$tableclienti = $PHPR_TAB_PRE."clienti";
$tableperiodi = $PHPR_TAB_PRE."periodi".$anno;
$tablesoldi = $PHPR_TAB_PRE."soldi".$anno;
$tablepersonalizza = $PHPR_TAB_PRE."personalizza";
$tablerclientiprenota = $PHPR_TAB_PRE."rclientiprenota".$anno;
$tabletransazioni = $PHPR_TAB_PRE."transazioni";
$tableversioni = $PHPR_TAB_PRE."versioni";
$tablerelutenti = $PHPR_TAB_PRE."relutenti";
$tablenazioni = $PHPR_TAB_PRE."nazioni";
$tableregioni = $PHPR_TAB_PRE."regioni";
$tablecitta = $PHPR_TAB_PRE."citta";
$tabledocumentiid = $PHPR_TAB_PRE."documentiid";
$tableparentele = $PHPR_TAB_PRE."parentele";
$tableanni = $PHPR_TAB_PRE."anni";
$tableutenti = $PHPR_TAB_PRE."utenti";
$tableappartamenti = $PHPR_TAB_PRE."appartamenti";
$tablerelclienti = $PHPR_TAB_PRE."relclienti";
$tablecasse = $PHPR_TAB_PRE."casse";
$tablecosti = $PHPR_TAB_PRE."costi".$anno;
$tablecache = $PHPR_TAB_PRE."cache";


$id_utente = controlla_login($numconnessione,$PHPR_TAB_PRE,$id_sessione,$nome_utente_phpr,$password_phpr,$anno);
if ($id_utente) {

if (str_replace("-","",$numero_contratto) != $numero_contratto) {
$numero_contratto = explode("-",$numero_contratto);
if (empty($num_ripeti) or controlla_num_pos($num_ripeti) == "NO") $num_ripeti = 1;
for ($num1 = 1 ; $num1 <= $num_ripeti ; $num1++) ${"codice_lingua_".$num1} = $numero_contratto[1];
$numero_contratto = $numero_contratto[0];
} # fine if (str_replace("-","",$numero_contratto) != $numero_contratto)

if ($id_utente != 1) {
$tableprivilegi = $PHPR_TAB_PRE."privilegi";
$tablerelgruppi = $PHPR_TAB_PRE."relgruppi";
$privilegi_annuali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '$anno'");
if (numlin_query($privilegi_annuali_utente) == 0) $anno_utente_attivato = "NO";
else {
$anno_utente_attivato = "SI";
$privilegi_globali_utente = esegui_query("select * from $tableprivilegi where idutente = '$id_utente' and anno = '1'");
$priv_mod_pers = risul_query($privilegi_globali_utente,0,'priv_mod_pers');
if (substr($priv_mod_pers,0,1) != "s") $modifica_pers = "NO";
$priv_vedi_tab = risul_query($privilegi_annuali_utente,0,'priv_vedi_tab');
$priv_vedi_tab_mesi = substr($priv_vedi_tab,0,1);
if ($priv_vedi_tab_mesi == "q" or $priv_vedi_tab_mesi == "g") $prendi_gruppi = "SI";
$priv_vedi_tab_costi = substr($priv_vedi_tab,2,1);
$priv_vedi_tab_prenotazioni = substr($priv_vedi_tab,1,1);
if ($priv_vedi_tab_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_vedi_tab_doc = substr($priv_vedi_tab,7,1);
$priv_mod_prenota = risul_query($privilegi_annuali_utente,0,'priv_mod_prenota');
$priv_mod_prenotazioni = substr($priv_mod_prenota,0,1);
if ($priv_mod_prenotazioni == "g") $prendi_gruppi = "SI";
$priv_mod_tariffa = substr($priv_mod_prenota,3,1);
$priv_mod_sconto = substr($priv_mod_prenota,6,1);
$priv_mod_caparra = substr($priv_mod_prenota,7,1);
$priv_mod_costi_agg = substr($priv_mod_prenota,8,1);
$priv_mod_utente_ins = substr($priv_mod_prenota,9,1);
$priv_mod_pagato = substr($priv_mod_prenota,10,1);
$priv_mod_codice = substr($priv_mod_prenota,21,1);
$priv_vedi_commento = substr($priv_mod_prenota,25,1);
$priv_vedi_commenti_pers = substr($priv_mod_prenota,26,1);
$priv_ins_clienti = risul_query($privilegi_globali_utente,0,'priv_ins_clienti');
$vedi_clienti = "NO";
if (substr($priv_ins_clienti,2,1) == "s") $vedi_clienti = "SI";
if (substr($priv_ins_clienti,2,1) == "p") $vedi_clienti = "PROPRI";
if (substr($priv_ins_clienti,2,1) == "g") { $vedi_clienti = "GRUPPI"; $prendi_gruppi = "SI"; }
$priv_vedi_telefoni = substr($priv_ins_clienti,3,1);
$priv_vedi_indirizzo = substr($priv_ins_clienti,4,1);
$casse_consentite = risul_query($privilegi_globali_utente,0,'casse_consentite');
$attiva_casse_consentite = substr($casse_consentite,0,1);
if ($attiva_casse_consentite == "s") {
$casse_consentite = explode(",",substr($casse_consentite,2));
unset($casse_consentite_vett);
for ($num1 = 0 ; $num1 < count($casse_consentite) ; $num1++) if ($casse_consentite[$num1]) $casse_consentite_vett[$casse_consentite[$num1]] = "SI";
} # fine if ($attiva_casse_consentite == "s")
$contratti_consentiti = risul_query($privilegi_annuali_utente,0,'contratti_consentiti');
$attiva_contratti_consentiti = substr($contratti_consentiti,0,1);
$priv_cancella_contratti = substr($contratti_consentiti,1,1);
if ($attiva_contratti_consentiti == "s") {
$contratti_consentiti = explode(",",$contratti_consentiti);
$contratti_consentiti_vett = array();
for ($num1 = 1 ; $num1 < count($contratti_consentiti) ; $num1++) if ($contratti_consentiti[$num1]) $contratti_consentiti_vett[$contratti_consentiti[$num1]] = "SI";
if ($contratti_consentiti_vett[$numero_contratto] != "SI") $anno_utente_attivato = "NO";
} # fine if ($attiva_contratti_consentiti == "s")
} # fine else if (numlin_query($privilegi_annuali_utente) == 0)
unset($utenti_gruppi);
$utenti_gruppi[$id_utente] = 1;
if ($prendi_gruppi == "SI") {
$gruppi_utente = esegui_query("select idgruppo from $tablerelgruppi where idutente = '$id_utente' and idgruppo is not NULL ");
$num_gruppi_utente = numlin_query($gruppi_utente);
for ($num1 = 0 ; $num1 < $num_gruppi_utente ; $num1++) {
$idgruppo = risul_query($gruppi_utente,$num1,'idgruppo');
$utenti_gruppo = esegui_query("select idutente from $tablerelgruppi where idgruppo = '$idgruppo' ");
$num_utenti_gruppo = numlin_query($utenti_gruppo);
for ($num2 = 0 ; $num2 < $num_utenti_gruppo ; $num2++) $utenti_gruppi[risul_query($utenti_gruppo,$num2,'idutente')] = 1;
} # fine for $num1
} # fine if ($prendi_gruppi == "SI")
} # fine if ($id_utente != 1)
else {
$anno_utente_attivato = "SI";
$modifica_pers = "SI";
$priv_vedi_tab_mesi = "s";
$priv_vedi_tab_costi = "s";
$priv_vedi_tab_prenotazioni = "s";
$priv_vedi_tab_doc = "s";
$priv_mod_prenotazioni = "s";
$priv_mod_tariffa = "s";
$priv_mod_sconto = "s";
$priv_mod_caparra = "s";
$priv_mod_costi_agg = "s";
$priv_mod_utente_ins = "s";
$priv_mod_pagato = "s";
$priv_mod_codice = "s";
$vedi_clienti = "SI";
$priv_vedi_telefoni = "s";
$priv_vedi_indirizzo = "s";
$attiva_casse_consentite = "n";
$attiva_contratti_consentiti = "n";
$priv_cancella_contratti = "s";
} # fine else if ($id_utente != 1)
if ($anno_utente_attivato == "SI") {




$numero_contratto = aggslashdb((int) $numero_contratto);
$nomi_contratti = trova_nomi_contratti($max_contr,$id_utente,$tablecontratti,$tablepersonalizza,$LIKE,$pag);
$nome_contratto = $nomi_contratti['salv'][$numero_contratto];



$mostra_contratto = "SI";
$mostra_foot = "";
if (!isset($origine)) $origine = "";
if (!isset($origine_vecchia)) $origine_vecchia = "";
$mostra_torna_indietro = 0;
$dir_salva = "";

if (isset($id_transazione) and $id_transazione == "tabdoc" and $priv_vedi_tab_doc != "n") {
$contr_corr_orig = $contr_corr;
if (substr($contr_corr,-3) == ".gz") $contr_corr = substr($contr_corr,0,-3);
$tipo_contratto = "";
if (substr($contr_corr,-4) == ".rtf") $tipo_contratto = "contrrtf";
if (substr($contr_corr,-5) == ".html") $tipo_contratto = "contrhtm";
if (substr($contr_corr,-4) == ".txt") $tipo_contratto = "contrtxt";
if (!$tipo_contratto) $mostra_contratto = "NO";
if ($tipo_contratto == "contrrtf") $suff_file = "rtf";
if ($tipo_contratto == "contrhtm") $suff_file = "html";
if ($tipo_contratto == "contrtxt") $suff_file = "txt";
$dir_salvato = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo = 'dir'");
if (numlin_query($dir_salvato)) $dir_salvato = formatta_dir_salva_doc(risul_query($dir_salvato,0,'testo'));
else $dir_salvato = "";
if (!$dir_salvato) $mostra_contratto = "NO";
if (preg_replace("/$nome_contratto"."_[0-9]{4,4}_[0-9]{5,8}(-[0-9]{5,8})?(_[0-9]+(-[0-9]+)?)*\.$suff_file/","",$contr_corr) != "") $mostra_contratto = "NO";
$n_file = 1;
$nome_file_contr[$n_file] = $contr_corr_orig;
if ($mostra_contratto == "NO") {
unset($id_transazione);
$mostra_torna_indietro = 1;
} # fine if ($mostra_contratto == "NO")
} # fine if (isset($id_transazione) and $id_transazione == "tabdoc" and $priv_vedi_tab_doc != "n")
elseif (!empty($id_transazione)) {
$manda_mail = "NO";
$dati_transazione = recupera_dati_transazione($id_transazione,$id_sessione,$anno,"SI",$tipo_transazione);
if ($tipo_transazione != "con_s") {
$mostra_contratto = "NO";
$mostra_torna_indietro = 1;
unset($id_transazione);
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");
$mostra_foot = "SI";
echo "".mex("Transazione <b style=\"font-weight: normal; color: red;\">scaduta</b>",$pag).".<br>";
} # fine if ($tipo_transazione != "con_s")
else {
$dir_salvato = risul_query($dati_transazione,0,'dati_transazione1');
$nome_file_contr = unserialize(risul_query($dati_transazione,0,'dati_transazione2'));
$tipo_contratto = risul_query($dati_transazione,0,'dati_transazione3');
$origine = risul_query($dati_transazione,0,'dati_transazione4');
$origine_vecchia = risul_query($dati_transazione,0,'dati_transazione5');
$num_file_salva = count($nome_file_contr);
if (isset($cancella) and $cancella == "SI" and $priv_cancella_contratti != "n") {
$mostra_contratto = "NO";
$mostra_torna_indietro = 1;
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");
$mostra_foot = "SI";
for ($num1 = 1 ; $num1 <= $num_file_salva ; $num1++) {
if (is_file($dir_salvato."/".$nome_file_contr[$num1])) {
unlink($dir_salvato."/".$nome_file_contr[$num1]);
if (strstr($nome_file_contr[$num1],"_1+1_") or strstr($nome_file_contr[$num1],"_1+1.")) {
if (substr($nome_file_contr[$num1],-3) == ".gz") {
$file_dat = explode(".",substr($nome_file_contr[$num1],0,-3));
$agg_suff = 4;
} # fine if (substr($nome_file_contr[$num1],-3) == ".gz")
else {
$file_dat = explode(".",$nome_file_contr[$num1]);
$agg_suff = 1;
} # fine else if (substr($nome_file_contr[$num1],-3) == ".gz")
$file_dat = $file_dat[(count($file_dat) - 1)];
$file_dat = substr($nome_file_contr[$num1],0,(-1 * (strlen($file_dat) + $agg_suff)));
if (is_file($dir_salvato."/".$file_dat.".dat")) unlink($dir_salvato."/".$file_dat.".dat");
} # fine if (strstr($nome_file_contr[$num1],"_1+1_") or strstr($nome_file_contr[$num1],"_1+1."))
} # fine if (is_file($dir_salvato."/".$nome_file_contr[$num1]))
echo "".mex("Il documento",$pag)." <b>".$nome_file_contr[$num1]."</b> ".mex("è stato <b style=\"font-weight: normal; color: blue;\">cancellato</b>",$pag).".<br>";
} # fine for $num1
} # fine if (isset($cancella) and $cancella == "SI" and $priv_cancella_contratti != "n")
elseif ($n_file < 1 or $n_file > $num_file_salva or controlla_num_pos($n_file) != "SI") $n_file = 1;
} # fine else if ($tipo_transazione != "con_s")
} # fine elseif (!empty($id_transazione))



if (isset($manda_mail) and $manda_mail == "SI") {
$dati_contratto = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo $LIKE 'contr%'");
$tipo_contratto = risul_query($dati_contratto,0,'tipo');
if ($tipo_contratto == "contreml") {
$mostra_contratto = "NO";
$mostra_torna_indietro = 1;
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");
if ($modifica_pers == "NO") {
$mittente_email = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'dati_struttura' and idutente = '$id_utente'");
$mittente_email = explode("#@&",risul_query($mittente_email,0,'valpersonalizza'));
$nome_mittente_email = $mittente_email[5];
$mittente_email = $mittente_email[2];
if ($nome_mittente_email) $mittente_email = "$nome_mittente_email <$mittente_email>";
} # fine if ($modifica_pers == "NO")
#$maschera_envelope = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'maschera_email' and idutente = '1'");
#$maschera_envelope = risul_query($maschera_envelope,0,'valpersonalizza');
$dati_allegato = array('val' => "");
$allegato_email = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo = 'allegato'");
$allegato_email = risul_query($allegato_email,0,'testo');
if ($allegato_email) {
$allegato_email = esegui_query("select * from $tablecontratti where numero = '$allegato_email' and tipo = 'file_all'");
$allegato_email = risul_query($allegato_email,0,'testo');
$allegato_email_v = explode(",",$allegato_email);
$dati_allegato['nome'] = $allegato_email_v[0];
$dati_allegato['tipo'] = $allegato_email_v[1];
$dati_allegato['val'] = substr($allegato_email,strlen($dati_allegato['nome'].",".$dati_allegato['tipo'].","));
} # fine if ($allegato_email)
$opz_eml = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo = 'opzeml'");
$opz_eml = risul_query($opz_eml,0,'testo');
$opz_eml = explode(";",$opz_eml);
$cont_type = "text/plain";
if ($opz_eml[0] == "html") $cont_type = "text/html";
$bcc_mittente = $opz_eml[1];
$bcc_indirizzo = $opz_eml[2];
if (defined('C_MASSIMO_NUM_EMAIL_GIORNALIERE') and C_MASSIMO_NUM_EMAIL_GIORNALIERE > 0) {
$dati_manda_email['num_app'] = esegui_query("select idappartamenti from $tableappartamenti ");
$dati_manda_email['num_app'] = numlin_query($dati_manda_email['num_app']);
} # fine if (defined('C_MASSIMO_NUM_EMAIL_GIORNALIERE') and C_MASSIMO_NUM_EMAIL_GIORNALIERE > 0)

for ($num1 = 1 ; $num1 <= $numero_email ; $num1++) {
if (${"destinatario_email".$num1} and strstr(${"destinatario_email".$num1},"@")) {
if ($modifica_pers != "NO") $mittente_email = ${"mittente_email".$num1};
$destinatario_email = ${"destinatario_email".$num1};
if (@get_magic_quotes_gpc()) {
${"oggetto_email".$num1} = stripslashes(${"oggetto_email".$num1});
${"testo_email".$num1} = stripslashes(${"testo_email".$num1});
} # fine if (@get_magic_quotes_gpc())
if (!defined('C_RESTRIZIONI_DEMO_ADMIN') or C_RESTRIZIONI_DEMO_ADMIN != "SI") {
$inviato = manda_email($mittente_email,"","",$destinatario_email,"",$bcc_mittente,$bcc_indirizzo,${"oggetto_email".$num1},${"testo_email".$num1},$cont_type,$dati_allegato,fixset(${"allega".$num1}),$tablepersonalizza,$tablecache);
} # fine if (!defined('C_RESTRIZIONI_DEMO_ADMIN') or C_RESTRIZIONI_DEMO_ADMIN != "SI")
else $inviato = array('ok' => 0);
if (!empty($inviato['err_spf'])) {
echo "<br><small>&nbsp;".mex("Non si è potuto mascherare il mittente dell'email perchè attualmente <b class=\"colwarn\">SPF non è configurato correttamente</b> sul dominio della email",$pag)." <b>$mittente_email</b>.
 ".mex("L'utente amministratore può cambiare questa inpostazione in",$pag)." \"";
if ($id_utente == 1) echo "<a href=\"./personalizza.php?id_sessione=$id_sessione&anno=$anno#sistema\">";
echo mex("configura e personalizza",$pag);
if ($id_utente == 1) echo "</a>";
echo "\".</small><br>";
} # fine if (!empty($inviato['err_spf']))
if (!empty($inviato['err_max_email'])) {
echo "<br>".mex("È stato raggiunto il numero massimo di email giornaliere",$pag)." (<span class=\"colred\">".$inviato['err_max_email']."</span>).
 ".mex("Per mandare altre email l'utente amministratore può impostare un server remoto in",$pag)." ";
if ($id_utente == 1) echo "<a href=\"./personalizza.php?id_sessione=$id_sessione&anno=$anno#sistema\">";
echo mex("configura e personalizza",$pag);
if ($id_utente == 1) echo "</a>";
echo ".<br>";
} # fine if (!empty($inviato['err_max_email']))
if ($inviato['ok']) {
echo "<br>&nbsp;".mex("L'email a",$pag)." <b>".htmlspecialchars($destinatario_email)."</b> ".mex("è stata inviata",$pag);
if ($bcc_mittente == "SI" or $bcc_indirizzo) echo " (".mex("bcc a",$pag)." ";
if ($bcc_mittente == "SI") echo $mittente_email;
if ($bcc_mittente == "SI" and $bcc_indirizzo) echo ", ";
if ($bcc_indirizzo) echo $bcc_indirizzo;
if ($bcc_mittente == "SI" or $bcc_indirizzo) echo ")";
echo ".<br>";
# inserisco il soggetto di questa email come inviato per i clienti corrispondenti
$tabelle_lock = array($tableclienti);
$tabelle_lock = lock_tabelle($tabelle_lock);
$destinatari_email = explode(",",$destinatario_email);
for ($num2 = 0 ; $num2 < count($destinatari_email) ; $num2++) {
$destinatari_email3 = explode(" ",trim($destinatari_email[$num2]));
for ($num3 = 0 ; $num3 < count($destinatari_email3) ; $num3++) {
$destinatario_email = aggslashdb(trim($destinatari_email3[$num3]));
if (str_replace("@","",$destinatario_email) != $destinatario_email) {
$clienti = esegui_query("select * from $tableclienti where email $ILIKE '$destinatario_email%' or email $ILIKE '% $destinatario_email%' or email $ILIKE '%,$destinatario_email%' ");
for ($num4 = 0 ; $num4 < numlin_query($clienti) ; $num4++) {
$idclienti = risul_query($clienti,$num4,'idclienti');
$doc_inviati = (string) risul_query($clienti,$num4,'doc_inviati');
if (str_replace("#@?".htmlspecialchars(${"oggetto_email".$num1})."#|?","",$doc_inviati) == $doc_inviati) {
if (!$doc_inviati) $doc_inviati = "#@?";
$doc_inviati .= str_replace("#|?","",str_replace("#@?","",htmlspecialchars(${"oggetto_email".$num1})))."#|?".date("Y-m-d",(time() + (C_DIFF_ORE * 3600)))."#@?";
} # fine if (str_replace("#@?".htmlspecialchars(${"oggetto_email".$num1})."#|?","",$doc_inviati) == $doc_inviati)
else $doc_inviati = preg_replace("/#@\?".str_replace('$','\$',str_replace("^","\^",str_replace("{","\{",str_replace("[","\[",str_replace("|","\|",str_replace(")","\)",str_replace("(","\(",str_replace("?","\?",str_replace("+","\+",str_replace(".","\.",str_replace("*","\*",str_replace("/","\/",${"oggetto_email".$num1}))))))))))))."#\|\?[^#]*#@\?/","#@?".htmlspecialchars(${"oggetto_email".$num1})."#|?".date("Y-m-d",(time() + (C_DIFF_ORE * 3600)))."#@?",$doc_inviati);
esegui_query("update $tableclienti set doc_inviati = '".aggslashdb($doc_inviati)."' where idclienti = '$idclienti' ");
} # fine for $num4
} # fine if (str_replace("@","",$destinatario_email) != $destinatario_email)
} # fine for $num3
} # fine for $num2
unlock_tabelle($tabelle_lock);
} # fine if ($inviato['ok'])
else {
if (!empty($inviato['err'])) echo "<br>".htmlspecialchars($inviato['err'])."<br>";
echo "<br>&nbsp;".mex("Non si è potuto inviare l'email a",$pag)." <b class=\"colred\">$destinatario_email</b>.<br>";
} # fine else if ($inviato['ok'])
} # fine if (${"destinatario_email".$num1} and strstr(${"destinatario_email".$num1},"@"))
} # fine for $num1

} # fine if ($tipo_contratto == "contreml")
} # fine if (isset($manda_mail) and $manda_mail == "SI")



if ($mostra_contratto == "SI") {
#$start_time = microtime();




define('C_ID_UTENTE_CONTR',$id_utente);
$campi_pers_comm = esegui_query("select valpersonalizza from $tablepersonalizza where idpersonalizza = 'campi_pers_comm' and idutente = '$id_utente'");
if (numlin_query($campi_pers_comm) == 1) {
$campi_pers_comm = explode(">",risul_query($campi_pers_comm,0,'valpersonalizza'));
$num_commenti_pers = count($campi_pers_comm);
} # fine if (numlin_query($campi_pers_comm) == 1)
else $num_commenti_pers = 0;
$campi_pers_cliente = esegui_query("select * from $tablepersonalizza where idpersonalizza = 'campi_pers_cliente' and idutente = '$id_utente' ");
if (numlin_query($campi_pers_cliente)) {
$campi_pers_cliente = explode(">",risul_query($campi_pers_cliente,0,'valpersonalizza'));
$num_campi_pers_cliente = count($campi_pers_cliente);
} # fine if (numlin_query($campi_pers_cliente))
else $num_campi_pers_cliente = 0;
include_once("./includes/funzioni_tariffe.php");
$dati_cat_pers = dati_cat_pers($id_utente,$tablepersonalizza,$lingua_mex,"v",0,1);
$commento_personalizzato_ = "commento_personalizzato_";
$campo_personalizzato_ = "campo_personalizzato_";
$num_persone_tipo_ = "num_persone_tipo_";
include("./includes/variabili_contratto.php");

if (empty($num_ripeti) or controlla_num_pos($num_ripeti) == "NO") $num_ripeti = 1;

if (@get_magic_quotes_gpc()) {
for ($n_r = 1 ; $n_r <= $num_ripeti ; $n_r++) {
for ($num1 = 0 ; $num1 < $num_var_predef_ripeti ; $num1++) ${$var_predef[$num1]."_".$n_r} = stripslashes(${$var_predef[$num1]."_".$n_r});
} # fine for $n_r
} # fine if (@get_magic_quotes_gpc())


if (!empty($lista_prenota)) {
$lista_clienti = "";
$lista_cassa = "";
if ($priv_vedi_tab_prenotazioni != "n" or ($priv_vedi_tab_mesi != "n" and $priv_mod_prenotazioni != "n")) {
$lista_prenota = explode(",",$lista_prenota);
$num_ripeti = count($lista_prenota) - 2;
include("./includes/dati_lista_prenota.php");
} # fine if ($priv_vedi_tab_mesi != "n" or ($priv_vedi_tab_mesi != "n" and $priv_mod_prenotazioni != "n"))
} # fine if (!empty($lista_prenota))

if (!empty($lista_clienti)) {
$lista_cassa = "";
if ($vedi_clienti != "NO") {
$lista_clienti = explode(",",$lista_clienti);
$num_ripeti = count($lista_clienti) - 2;
include("./includes/dati_lista_clienti.php");
} # fine if ($vedi_clienti != "NO")
} # fine if (!empty($lista_clienti))

if (!empty($lista_cassa) and controlla_num_pos($lista_cassa) == "SI") {
if ($priv_vedi_tab_costi != "n" and ($attiva_casse_consentite == "n" or $casse_consentite_vett[$lista_cassa] == "SI")) {
$num_ripeti = 1;
include("./includes/dati_lista_cassa.php");
} # fine if ($priv_vedi_tab_costi != "n" and ($attiva_casse_consentite == "n" or $casse_consentite_vett[$lista_cassa] == "SI"))
} # fine if (!empty($lista_cassa) and controlla_num_pos($lista_cassa) == "SI")



$mostra_headers = "SI";
$messaggio_di_errore = "";
$num_contr_esist = 0;
if (empty($id_transazione)) $contratto = crea_contratto($numero_contratto,$tipo_contratto,$id_utente,$id_sessione,$origine,$origine_vecchia);
else {
if (@is_file($dir_salvato."/".$nome_file_contr[$n_file])) {
if (substr($nome_file_contr[$n_file],-3) == ".gz") $contratto = @gzfile($dir_salvato."/".$nome_file_contr[$n_file]);
else $contratto = @file($dir_salvato."/".$nome_file_contr[$n_file]);
if (@is_array($contratto)) $contratto = implode("",$contratto);
else $contratto = "";
} # fine if (@is_file($dir_salvato."/".$nome_file_contr[$n_file]))
else $contratto = "";
} # fine else if (empty($id_transazione))

if ($messaggio_di_errore) {
$dir_salva = "";
$tipo_contratto = "contrhtm";
$contratto = "<div style=\"padding: 5px;\">
<br><span class=\"colred\">".mex("Errore",$pag)."</span>:<br>
<br><div style=\"padding: 0 0 0 10px;\">
$messaggio_di_errore
</div></div>";
$mostra_torna_indietro = 1;
} # fine if ($messaggio_di_errore)


if ($dir_salva and !$num_contr_esist) $mostra_headers = "NO";
$foothtm = "";

if ($tipo_contratto == "contrhtm" and !$dir_salva) {
$show_bar = "NO";
$headhtm = esegui_query("select testo from $tablecontratti where numero = '$numero_contratto' and tipo = 'headhtm'");
if (numlin_query($headhtm) == 1) {
$mostra_headers = "NO";
echo risul_query($headhtm,0,'testo');
$foothtm = esegui_query("select testo from $tablecontratti where numero = '$numero_contratto' and tipo = 'foothtm'");
if (numlin_query($foothtm)) $foothtm = risul_query($foothtm,0,'testo');
} # fine if (numlin_query($headhtm) == 1)
} # fine if ($tipo_contratto == "contrhtm" and !$dir_salva)
if ($tipo_contratto == "contreml") $mostra_torna_indietro = 1;
if ($tipo_contratto == "contrrtf" and !$dir_salva) {
$mostra_headers = "NO";
if ($nome_file_contr) $nome_file = $nome_file_contr[$n_file];
else $nome_file = str_replace("\\","_",str_replace("/","_",str_replace(" ","_",$nome_contratto))).".rtf";
if (substr($nome_file,-3) == ".gz") $nome_file = substr($nome_file,0,-3);
header("Pragma: public");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: pre-check=0, post-check=0, max-age=0");
header("Content-Transfer-Encoding: none");
header("Content-Type: application/rtf; name=\"$nome_file\"");
#header("Content-Type: application/octetstream; name=\"$nome_file\"");
#header("Content-Type: application/octet-stream; name=\"$nome_file\"");
header("Content-Disposition: inline; filename=\"$nome_file\"");
#header("Content-length: $lunghezza_file");
} # fine if ($tipo_contratto == "contrrtf" and !$dir_salva)
if ($tipo_contratto == "contrtxt" and !$dir_salva) {
$mostra_headers = "NO";
if ($nome_file_contr) {
$nome_file = $nome_file_contr[$n_file];
if (substr($nome_file,-3) == ".gz") $nome_file = substr($nome_file,0,-3);
} # fine if ($nome_file_contr)
else $nome_file = str_replace("\\","_",str_replace("/","_",str_replace(" ","_",$nome_contratto))).".txt";
$est_txt = esegui_query("select * from $tablecontratti where numero = '$numero_contratto' and tipo = 'est_txt'");
if (numlin_query($est_txt)) {
$est_txt = risul_query($est_txt,0,'testo');
$nome_file = substr($nome_file,0,-4).".$est_txt";
} # fine if (numlin_query($est_txt))
header("Pragma: public");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: pre-check=0, post-check=0, max-age=0");
header("Content-Transfer-Encoding: none");
header("Content-Type: application/text; name=\"$nome_file\"");
#header("Content-Type: application/octetstream; name=\"$nome_file\"");
#header("Content-Type: application/octet-stream; name=\"$nome_file\"");
header("Content-Disposition: inline; filename=\"$nome_file\"");
#header("Content-length: $lunghezza_file");
} # fine if ($tipo_contratto == "contrtxt" and !$dir_salva)


if ($mostra_headers == "SI") {
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/head.php");
else include("./includes/head.php");
} # fine if ($mostra_headers == "SI")


if ($dir_salva) {
$mostra_torna_indietro = 1;
crea_messaggio_contr_salva($nome_file_contr,$num_file_salva,$num_contr_esist,$nome_file_contr_esist,$numero_contratto,$nomi_contratti,$dir_salva,$tipo_contratto,$num_ripeti,$origine,$origine_vecchia,$lista_var_form,$mostra_headers,$anno,$id_sessione,$id_utente,$tema,$tableversioni,$tabletransazioni,$pag);
} # fine if ($dir_salva)


if (!$dir_salva) echo $contratto;


} # fine if ($mostra_contratto == "SI")



if ($mostra_torna_indietro) {
if (!$origine) $origine = "./inizio.php";
echo "<form accept-charset=\"utf-8\" method=\"post\" action=\"".htmlspecialchars($origine)."\"><div><br><br>
<input type=\"hidden\" name=\"origine_vecchia\" value=\"".htmlspecialchars($origine_vecchia)."\">
<input type=\"hidden\" name=\"anno\" value=\"$anno\">
<input type=\"hidden\" name=\"id_sessione\" value=\"$id_sessione\">
<input type=\"hidden\" name=\"torna_indietro\" value=\"1\">
&nbsp;&nbsp;".bottone_submit_contr(mex("Torna indietro",$pag),"indi","indietro","gobk")."
</div></form><br>";
} # fine if ($mostra_torna_indietro)


if (($mostra_contratto == "SI" and $mostra_headers == "SI") or (isset($manda_mail) and $manda_mail == "SI") or $dir_salva or $mostra_foot) {
if ($tema[$id_utente] and $tema[$id_utente] != "base" and @is_dir("./themes/".$tema[$id_utente]."/php")) include("./themes/".$tema[$id_utente]."/php/foot.php");
else include("./includes/foot.php");
} # fine if (($mostra_contratto == "SI" and $mostra_headers == "SI") or...
if ($foothtm) echo $foothtm;



} # fine if ($anno_utente_attivato == "SI")
} # fine if ($id_utente)



?>
