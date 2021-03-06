<?php

##################################################################################
#    HOTELDRUID
#    Copyright (C) 2001-2017 by Marco Maria Francesco De Santis (marco@digitaldruid.net)
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


$var_predef = array();

$var_pag = array();
$var_predef[0] = "cognome";
$var_predef[1] = "nome";
$var_predef[2] = "soprannome";
$var_predef[3] = "titolo";
$var_predef[4] = "sesso";
$var_predef[5] = "cittadinanza";
$var_predef[6] = "data_nascita";
$var_predef[7] = "nazione_nascita";
$var_predef[8] = "regione_nascita";
$var_predef[9] = "citta_nascita";
$var_predef[10] = "nazione";
$var_predef[11] = "regione";
$var_predef[12] = "citta";
$var_predef[13] = "via";
$var_predef[14] = "via2";
$var_predef[15] = "numcivico";
$var_predef[16] = "documento";
$var_predef[17] = "tipo_documento";
$var_predef[18] = "citta_documento";
$var_predef[19] = "regione_documento";
$var_predef[20] = "nazione_documento";
$var_predef[21] = "scadenza_documento";
$var_predef[22] = "telefono";
$var_predef[23] = "telefono2";
$var_predef[24] = "telefono3";
$var_predef[25] = "fax";
$var_predef[26] = "email";
$var_predef[27] = "email2";
$var_predef[28] = "email_certificata";
$var_predef[29] = "cap";
$var_predef[30] = "codice_lingua";
$var_predef[31] = "codice_fiscale";
$var_predef[32] = "partita_iva";
$var_predef[33] = "data_inizio";
$var_predef[34] = "data_fine";
$var_predef[35] = "num_periodi";
$var_predef[36] = "orario_entrata_stimato";
$var_predef[37] = "orario_registrazione_entrata";
$var_predef[38] = "orario_registrazione_uscita";
$var_predef[39] = "commento";
$var_predef[40] = "promemoria_entrata";
$var_predef[41] = "promemoria_uscita";
$var_predef[42] = "origine_prenotazione";
$var_predef[43] = "num_persone";
$var_predef[44] = "n_letti_agg";
$var_predef[45] = "num_persone_tot";
$var_predef[46] = "unita_occupata";
$var_predef[47] = "unita_assegnabili";
$var_predef[48] = "nome_tariffa";
$var_predef[49] = "costo_tariffa";
$var_predef[50] = "costo_tariffa_p";
$var_predef[51] = "valuta_tariffa";
$var_predef[52] = "tasso_cambio_tariffa";
$var_predef[53] = "costo_valuta_tariffa";
$var_predef[54] = "costo_tot";
$var_predef[55] = "costo_tot_p";
$var_predef[56] = "costo_valuta_tot";
$var_predef[57] = "caparra";
$var_predef[58] = "caparra_p";
$var_predef[59] = "resto_caparra";
$var_predef[60] = "resto_caparra_p";
$var_predef[61] = "valuta_caparra";
$var_predef[62] = "valore_valuta_caparra";
$var_predef[63] = "tasso_cambio_caparra";
$var_predef[64] = "metodo_pagamento_caparra";
$var_predef[65] = "commissioni";
$var_predef[66] = "commissioni_p";
$var_predef[67] = "resto_commissioni";
$var_predef[68] = "resto_commissioni_p";
$var_predef[69] = "sconto";
$var_predef[70] = "sconto_p";
$var_predef[71] = "valore_valuta_sconto";
$var_predef[72] = "pagato";
$var_predef[73] = "pagato_p";
$var_predef[74] = "resto_da_pagare";
$var_predef[75] = "resto_da_pagare_p";
$var_predef[76] = "percentuale_tasse_tariffa";
$var_predef[77] = "tasse_tariffa";
$var_predef[78] = "tasse_tariffa_p";
$var_predef[79] = "costo_tariffa_senza_tasse";
$var_predef[80] = "costo_tariffa_senza_tasse_p";
$var_predef[81] = "tasse_sconto";
$var_predef[82] = "tasse_sconto_p";
$var_predef[83] = "sconto_senza_tasse";
$var_predef[84] = "sconto_senza_tasse_p";
$var_predef[85] = "costo_tariffa_giorno_array";
$var_predef[86] = "costo_tariffa_giorno_array_p";
$var_predef[87] = "nome_costo_agg";
$var_predef[88] = "valore_costo_agg";
$var_predef[89] = "valore_costo_agg_p";
$var_predef[90] = "percentuale_tasse_costo_agg";
$var_predef[91] = "tasse_costo_agg";
$var_predef[92] = "tasse_costo_agg_p";
$var_predef[93] = "valore_costo_agg_senza_tasse";
$var_predef[94] = "valore_costo_agg_senza_tasse_p";
$var_predef[95] = "giorni_costo_agg";
$var_predef[96] = "moltiplica_max_costo_agg";
$var_predef[97] = "valore_giornaliero_max_costo_agg";
$var_predef[98] = "valore_giornaliero_max_costo_agg_p";
$var_predef[99] = "tipo_persona_costo_agg";
$var_predef[100] = "data_inserimento_costo_agg";
$var_predef[101] = "utente_inserimento_costo_agg";
$var_predef[102] = "valore_tutti_costi_agg";
$var_predef[103] = "valore_tutti_costi_agg_p";
$var_predef[104] = "tutti_i_costi_agg";
$var_predef[105] = "tutti_i_costi_agg_p";
$var_predef[106] = "nome_costo_agg_sel";
$var_predef[107] = "valore_costo_agg_sel";
$var_predef[108] = "valore_costo_agg_sel_p";
$var_predef[109] = "percentuale_tasse_costo_agg_sel";
$var_predef[110] = "tasse_costo_agg_sel";
$var_predef[111] = "tasse_costo_agg_sel_p";
$var_predef[112] = "moltiplica_max_costo_agg_sel";
$var_predef[113] = "valore_giornaliero_max_costo_agg_sel";
$var_predef[114] = "valore_giornaliero_max_costo_agg_sel_p";
$var_predef[115] = "num_costi_aggiuntivi";
$var_predef[116] = "valore_pagamento";
$var_predef[117] = "valore_pagamento_p";
$var_predef[118] = "valuta_pagamento";
$var_predef[119] = "valore_valuta_pagamento";
$var_predef[120] = "tasso_cambio_pagamento";
$var_predef[121] = "metodo_pagamento";
$var_predef[122] = "data_pagamento";
$var_predef[123] = "utente_pagamento";
$var_predef[124] = "tutti_i_pagamenti";
$var_predef[125] = "tutti_i_pagamenti_p";
$var_predef[126] = "valore_ultimo_pagamento";
$var_predef[127] = "valore_ultimo_pagamento_p";
$var_predef[128] = "metodo_ultimo_pagamento";
$var_predef[129] = "data_ultimo_pagamento";
$var_predef[130] = "utente_ultimo_pagamento";
$var_predef[131] = "num_pagamenti";
$var_predef[132] = "numero_prenotazione";
$var_predef[133] = "numero_ripetizione_prenotazioni";
$var_predef[134] = "codice_prenotazione";
$var_predef[135] = "data_inserimento_prenotazione";
$var_predef[136] = "utente_inserimento_prenotazione";
$var_predef[137] = "num_ospiti_tot";
$var_predef[138] = "numero_ospite";
$var_predef[139] = "cognome_ospite";
$var_predef[140] = "nome_ospite";
$var_predef[141] = "soprannome_ospite";
$var_predef[142] = "titolo_ospite";
$var_predef[143] = "sesso_ospite";
$var_predef[144] = "cittadinanza_ospite";
$var_predef[145] = "parentela_ospite";
$var_predef[146] = "data_nascita_ospite";
$var_predef[147] = "citta_nascita_ospite";
$var_predef[148] = "regione_nascita_ospite";
$var_predef[149] = "nazione_nascita_ospite";
$var_predef[150] = "citta_ospite";
$var_predef[151] = "regione_ospite";
$var_predef[152] = "nazione_ospite";
$var_predef[153] = "via_ospite";
$var_predef[154] = "via2_ospite";
$var_predef[155] = "numcivico_ospite";
$var_predef[156] = "documento_ospite";
$var_predef[157] = "tipo_documento_ospite";
$var_predef[158] = "citta_documento_ospite";
$var_predef[159] = "regione_documento_ospite";
$var_predef[160] = "nazione_documento_ospite";
$var_predef[161] = "scadenza_documento_ospite";
$var_predef[162] = "telefono_ospite";
$var_predef[163] = "telefono2_ospite";
$var_predef[164] = "telefono3_ospite";
$var_predef[165] = "fax_ospite";
$var_predef[166] = "email_ospite";
$var_predef[167] = "email2_ospite";
$var_predef[168] = "email_certificata_ospite";
$var_predef[169] = "cap_ospite";
$var_predef[170] = "codice_fiscale_ospite";
$var_predef[171] = "partita_iva_ospite";
$var_predef[172] = "nome_documento_salvato";
$var_predef[173] = "numero_progressivo_documento_salvato";
$var_predef[174] = "data_creazione_documento_salvato";
$var_predef[175] = "nome_file_documento_salvato";
$var_predef[176] = "numero_progressivo_documento";
$var_predef[177] = "nome_unita";
$var_predef[178] = "casa_unita";
$var_predef[179] = "piano_unita";
$var_predef[180] = "capacita_unita";
$var_predef[181] = "priorita_unita";
$var_predef[182] = "num_unita";
$var_predef[183] = "costo_tot_somma_ripetizioni";
$var_predef[184] = "costo_tot_somma_ripetizioni_p";
$var_predef[185] = "caparra_somma_ripetizioni";
$var_predef[186] = "caparra_somma_ripetizioni_p";
$var_predef[187] = "resto_caparra_somma_ripetizioni";
$var_predef[188] = "resto_caparra_somma_ripetizioni_p";
$var_predef[189] = "pagato_somma_ripetizioni";
$var_predef[190] = "pagato_somma_ripetizioni_p";
$var_predef[191] = "resto_da_pagare_somma_ripetizioni";
$var_predef[192] = "resto_da_pagare_somma_ripetizioni_p";
$var_predef[193] = "num_persone_tot_somma_ripetizioni";
$var_predef[194] = "codice_cittadinanza";
$var_predef[195] = "codice_nazione_nascita";
$var_predef[196] = "codice_regione_nascita";
$var_predef[197] = "codice_citta_nascita";
$var_predef[198] = "codice_nazione";
$var_predef[199] = "codice_regione";
$var_predef[200] = "codice_citta";
$var_predef[201] = "codice_tipo_documento";
$var_predef[202] = "codice_citta_documento";
$var_predef[203] = "codice_regione_documento";
$var_predef[204] = "codice_nazione_documento";
$var_predef[205] = "codice2_cittadinanza";
$var_predef[206] = "codice2_nazione_nascita";
$var_predef[207] = "codice2_regione_nascita";
$var_predef[208] = "codice2_citta_nascita";
$var_predef[209] = "codice2_nazione";
$var_predef[210] = "codice2_regione";
$var_predef[211] = "codice2_citta";
$var_predef[212] = "codice2_tipo_documento";
$var_predef[213] = "codice2_citta_documento";
$var_predef[214] = "codice2_regione_documento";
$var_predef[215] = "codice2_nazione_documento";
$var_predef[216] = "codice3_cittadinanza";
$var_predef[217] = "codice3_nazione_nascita";
$var_predef[218] = "codice3_regione_nascita";
$var_predef[219] = "codice3_citta_nascita";
$var_predef[220] = "codice3_nazione";
$var_predef[221] = "codice3_regione";
$var_predef[222] = "codice3_citta";
$var_predef[223] = "codice3_tipo_documento";
$var_predef[224] = "codice3_citta_documento";
$var_predef[225] = "codice3_regione_documento";
$var_predef[226] = "codice3_nazione_documento";
$var_predef[227] = "codice_cittadinanza_ospite";
$var_predef[228] = "codice_parentela_ospite";
$var_predef[229] = "codice_nazione_nascita_ospite";
$var_predef[230] = "codice_regione_nascita_ospite";
$var_predef[231] = "codice_citta_nascita_ospite";
$var_predef[232] = "codice_nazione_ospite";
$var_predef[233] = "codice_regione_ospite";
$var_predef[234] = "codice_citta_ospite";
$var_predef[235] = "codice_tipo_documento_ospite";
$var_predef[236] = "codice_citta_documento_ospite";
$var_predef[237] = "codice_regione_documento_ospite";
$var_predef[238] = "codice_nazione_documento_ospite";
$var_predef[239] = "codice2_cittadinanza_ospite";
$var_predef[240] = "codice2_parentela_ospite";
$var_predef[241] = "codice2_nazione_nascita_ospite";
$var_predef[242] = "codice2_regione_nascita_ospite";
$var_predef[243] = "codice2_citta_nascita_ospite";
$var_predef[244] = "codice2_nazione_ospite";
$var_predef[245] = "codice2_regione_ospite";
$var_predef[246] = "codice2_citta_ospite";
$var_predef[247] = "codice2_tipo_documento_ospite";
$var_predef[248] = "codice2_citta_documento_ospite";
$var_predef[249] = "codice2_regione_documento_ospite";
$var_predef[250] = "codice2_nazione_documento_ospite";
$var_predef[251] = "codice3_cittadinanza_ospite";
$var_predef[252] = "codice3_parentela_ospite";
$var_predef[253] = "codice3_nazione_nascita_ospite";
$var_predef[254] = "codice3_regione_nascita_ospite";
$var_predef[255] = "codice3_citta_nascita_ospite";
$var_predef[256] = "codice3_nazione_ospite";
$var_predef[257] = "codice3_regione_ospite";
$var_predef[258] = "codice3_citta_ospite";
$var_predef[259] = "codice3_tipo_documento_ospite";
$var_predef[260] = "codice3_citta_documento_ospite";
$var_predef[261] = "codice3_regione_documento_ospite";
$var_predef[262] = "codice3_nazione_documento_ospite";
$var_predef[263] = "data_inizio_selezione";
$var_predef[264] = "data_fine_selezione";
$var_predef[265] = "oggi";
$var_predef[266] = "utente_attuale";
$var_predef[267] = "nome_struttura";
$var_predef[268] = "tipo_struttura";
$var_predef[269] = "email_struttura";
$var_predef[270] = "ragione_sociale_struttura";
$var_predef[271] = "sito_web_struttura";
$var_predef[272] = "nome_contatto_struttura";
$var_predef[273] = "nazione_struttura";
$var_predef[274] = "regione_struttura";
$var_predef[275] = "comune_struttura";
$var_predef[276] = "indirizzo_struttura";
$var_predef[277] = "CAP_struttura";
$var_predef[278] = "telefono_struttura";
$var_predef[279] = "fax_struttura";
$var_predef[280] = "codice_fiscale_struttura";
$var_predef[281] = "partita_iva_struttura";
$var_predef[282] = "numero_stelle_struttura";
$var_predef[283] = "logo_struttura";
$var_predef[284] = "codice_nazione_struttura";
$var_predef[285] = "codice_regione_struttura";
$var_predef[286] = "codice_comune_struttura";
$var_predef[287] = "codice2_nazione_struttura";
$var_predef[288] = "codice2_regione_struttura";
$var_predef[289] = "codice2_comune_struttura";
$var_predef[290] = "codice3_nazione_struttura";
$var_predef[291] = "codice3_regione_struttura";
$var_predef[292] = "codice3_comune_struttura";
$var_predef[293] = "nome_valuta";
$var_predef[294] = "testo_email_richiesta";
$var_predef[295] = "testo_quotato_email_richiesta";
$var_predef[296] = "url_base_pagine_web";
$var_predef[297] = "ritorno_a_capo";
$var_predef[298] = "avanzamento_riga";
$var_predef[299] = "valore_nullo";
$var_predef[300] = "email_gia_inviata";
$var_predef[301] = "errore_ripetizione";
$var_predef[302] = "messaggio_di_errore";

$num_var_predef = count($var_predef);
$num_var_non_ripeti = 127;
$num_var_predef_ripeti = $num_var_predef - $num_var_non_ripeti;
$numero_ins_cat_pers = null;
$numero_ins_comm_pers = null;
$numero_inserimento_pers = null;

if (!empty($dati_cat_pers['num'])) {
# deve essere maggiore di $num_commenti_pers e $numero_inserimento_pers
$numero_ins_cat_pers = 44;
for ($num_v = ($num_var_predef - 1) ; $num_v >= $numero_ins_cat_pers ; $num_v--) $var_predef[($num_v + $dati_cat_pers['num'])] = $var_predef[$num_v];
for ($num_v = 0 ; $num_v < $dati_cat_pers['num'] ; $num_v++) {
$var_predef[($numero_ins_cat_pers + $num_v)] = $num_persone_tipo_.($num_v + 1);
} # fine for $num_v
$num_var_predef = $num_var_predef + $dati_cat_pers['num'];
$num_var_predef_ripeti = $num_var_predef_ripeti + $dati_cat_pers['num'];
} # fine if (!empty($dati_cat_pers['num']))

if (!empty($num_commenti_pers)) {
# deve essere maggiore di $numero_inserimento_pers
$numero_ins_comm_pers = 40;
for ($num_v = ($num_var_predef - 1) ; $num_v >= $numero_ins_comm_pers ; $num_v--) $var_predef[($num_v + $num_commenti_pers)] = $var_predef[$num_v];
for ($num_v = 0 ; $num_v < $num_commenti_pers ; $num_v++) {
$var_predef[($numero_ins_comm_pers + $num_v)] = $commento_personalizzato_.$campi_pers_comm[$num_v];
} # fine for $num_v
$num_var_predef = $num_var_predef + $num_commenti_pers;
$num_var_predef_ripeti = $num_var_predef_ripeti + $num_commenti_pers;
if ($numero_ins_cat_pers) $numero_ins_cat_pers += $num_commenti_pers;
} # fine if (!empty($num_commenti_pers))

if (!empty($num_campi_pers_cliente)) {
$numero_inserimento_pers = 31;
for ($num_v = ($num_var_predef - 1) ; $num_v >= $numero_inserimento_pers ; $num_v--) $var_predef[($num_v + $num_campi_pers_cliente)] = $var_predef[$num_v];
for ($num_v = 0 ; $num_v < $num_campi_pers_cliente ; $num_v++) {
$opt_pers = explode("<",$campi_pers_cliente[$num_v]);
$var_predef[($numero_inserimento_pers + $num_v)] = $campo_personalizzato_.$opt_pers[0];
} # fine for $num_v
$num_var_predef = $num_var_predef + $num_campi_pers_cliente;
$num_var_predef_ripeti = $num_var_predef_ripeti + $num_campi_pers_cliente;
if ($numero_ins_cat_pers) $numero_ins_cat_pers += $num_campi_pers_cliente;
if ($numero_ins_comm_pers) $numero_ins_comm_pers += $num_campi_pers_cliente;
} # fine if (!empty($num_campi_pers_cliente))



$var_predef_data = array();

$var_predef_data['data_nascita'] = 1;
$var_predef_data['scadenza_documento'] = 1;
$var_predef_data['data_inizio'] = 1;
$var_predef_data['data_fine'] = 1;
$var_predef_data['data_pagamento'] = 1;
$var_predef_data['data_ultimo_pagamento'] = 1;
$var_predef_data['data_inserimento_costo_agg'] = 1;
$var_predef_data['data_inserimento_prenotazione'] = 1;
$var_predef_data['data_nascita_ospite'] = 1;
$var_predef_data['scadenza_documento_ospite'] = 1;
$var_predef_data['data_inizio_selezione'] = 1;
$var_predef_data['data_fine_selezione'] = 1;
$var_predef_data['data_creazione_documento_salvato'] = 1;
$var_predef_data['oggi'] = 1;



$var_riserv = array();

$var_riserv['contratto'] = 1;
$var_riserv['filecontr'] = 1;
$var_riserv['ripeti_tutto'] = 1;
$var_riserv['tipo_contratto'] = 1;
$var_riserv['dir_salva'] = 1;
$var_riserv['contratto_restante'] = 1;
$var_riserv['num1'] = 1;
$var_riserv['num2'] = 1;
$var_riserv['num3'] = 1;
$var_riserv['var_predef'] = 1;
$var_riserv['num_var_predef'] = 1;
$var_riserv['num_var_predef_ripeti'] = 1;
$var_riserv['anno'] = 1;
$var_riserv['pag'] = 1;
$var_riserv['contratto_orig'] = 1;
$var_riserv['nome_file_contr'] = 1;
$var_riserv['lingua_mex'] = 1;
$var_riserv['LIKE'] = 1;
$var_riserv['modifica_pers'] = 1;
$var_riserv['vedi_clienti'] = 1;
$var_riserv['utenti_gruppi'] = 1;
$var_riserv['tablecontratti'] = 1;
$var_riserv['tableclienti'] = 1;
$var_riserv['tablerclientiprenota'] = 1;
$var_riserv['tablepersonalizza'] = 1;
$var_riserv['tablerelutenti'] = 1;
$var_riserv['tablenazioni'] = 1;
$var_riserv['tableregioni'] = 1;
$var_riserv['tablecitta'] = 1;
$var_riserv['tabledocumentiid'] = 1;
$var_riserv['tableparentele'] = 1;
$var_riserv['data_inizio_selezione_orig'] = 1;
$var_riserv['data_fine_selezione_orig'] = 1;
$var_riserv['fr_via'] = 1;
$var_riserv['stile_soldi'] = 1;
$var_riserv['stile_data'] = 1;
$var_riserv['id_utente'] = 1;
$var_riserv['num_prog_contr'] = 1;
$var_riserv['num_prog_contr_max'] = 1;
$var_riserv['sovrascrivi'] = 1;
$var_riserv['num_file_salva'] = 1;
$var_riserv['lista_var_form'] = 1;
$var_riserv['num_contr_esist'] = 1;
$var_riserv['nome_contratto'] = 1;
$var_riserv['nome_file_contr_esist'] = 1;
$var_riserv['dati_file_dat'] = 1;
$var_riserv['resto_nome_contr'] = 1;
$var_riserv['cont_salva'] = 1;
$var_riserv['num_pren_esist'] = 1;
$var_riserv['num_variabili'] = 1;
$var_riserv['variabile'] = 1;
$var_riserv['num_arrays'] = 1;
$var_riserv['array'] = 1;
$var_riserv['var_arr'] = 1;
$var_riserv['num_arr'] = 1;
$var_riserv['arr_var_esist'] = 1;
$var_riserv['array_date_contr'] = 1;
$var_riserv['num_condizioni_ini_d'] = 1;
$var_riserv['condizioni_ini_d'] = 1;
$var_riserv['num_condizioni_ini_r'] = 1;
$var_riserv['condizioni_ini_r'] = 1;
$var_riserv['num_condizioni_rip_o'] = 1;
$var_riserv['condizioni_rip_o'] = 1;
$var_riserv['num_condizioni_rip_c'] = 1;
$var_riserv['condizioni_rip_c'] = 1;
$var_riserv['num_condizioni_rip_p'] = 1;
$var_riserv['condizioni_rip_p'] = 1;
$var_riserv['num_condizioni_rip_u'] = 1;
$var_riserv['condizioni_rip_u'] = 1;
$var_riserv['num_condizioni_rip_d'] = 1;
$var_riserv['condizioni_rip_d'] = 1;
$var_riserv['condizione_ini_vett'] = 1;
$var_riserv['num_condizioni'] = 1;
$var_riserv['condizione_vett'] = 1;
$var_riserv['azione_vett'] = 1;
$var_riserv['numero_contratto'] = 1;
$var_riserv['origine'] = 1;
$var_riserv['origine_vecchia'] = 1;
$var_riserv['mittente_email'] = 1;
$var_riserv['allegato_email'] = 1;
$var_riserv['id_sessione'] = 1;
$var_riserv['contratto_parte0'] = 1;
$var_riserv['ripeti_parte0'] = 1;
$var_riserv['num_parti0_contr'] = 1;
$var_riserv['contratto_vett'] = 1;
$var_riserv['n_p0'] = 1;
$var_riserv['contratto_orig0'] = 1;
$var_riserv['contratto_parte'] = 1;
$var_riserv['ripeti_parte'] = 1;
$var_riserv['num_parti_contr'] = 1;
$var_riserv['n_r0'] = 1;
$var_riserv['num_ripeti0'] = 1;
$var_riserv['ripeti_prenota_data'] = 1;
$var_riserv['arr_parte0'] = 1;
$var_riserv['n_p'] = 1;
$var_riserv['n_r'] = 1;
$var_riserv['num_ripeti'] = 1;
$var_riserv['numero_ripetizione_prenotazioni_orig'] = 1;
$var_riserv['rel_esist'] = 1;
$var_riserv['contratto_parte2'] = 1;
$var_riserv['ripeti_parte2'] = 1;
$var_riserv['num_parti2_contr'] = 1;
$var_riserv['arr_parte2'] = 1;
$var_riserv['n_p2'] = 1;
$var_riserv['num_ripeti2'] = 1;
$var_riserv['ospiti'] = 1;
$var_riserv['tipo_parte2'] = 1;
$var_riserv['n_r2'] = 1;
$var_riserv['var_arr_nome'] = 1;
$var_riserv['condizione'] = 1;
$var_riserv['contr_vett'] = 1;
$var_riserv['c'] = 1;
$var_riserv['num_cond_vett'] = 1;
$var_riserv['azione'] = 1;
$var_riserv['num_se'] = 1;
$var_riserv['cond_verificata'] = 1;
$var_riserv['var_if'] = 1;
$var_riserv['val_if'] = 1;
$var_riserv['val_var_if'] = 1;
$var_riserv['se_cond_corr'] = 1;
$var_riserv['val_then'] = 1;
$var_riserv['txt_sost1'] = 1;
$var_riserv['txt_sost2'] = 1;
$var_riserv['var_then_orig'] = 1;
$var_riserv['var_da_assegnare'] = 1;
$var_riserv['nome_arr'] = 1;
$var_riserv['lista_val'] = 1;
$var_riserv['num_lista_val'] = 1;
$var_riserv['data_corr_arr'] = 1;
$var_riserv['cont_oper'] = 1;
$var_riserv['var_con_punti'] = 1;
$var_riserv['var_da_oper'] = 1;
$var_riserv['var_da_oper2'] = 1;
$var_riserv['condizione_ini_r_vett'] = 1;
$var_riserv['azione_ini_r_vett'] = 1;
$var_riserv['num_cond_ini_r_vett'] = 1;
$var_riserv['condizione_ini_d_vett'] = 1;
$var_riserv['azione_ini_d_vett'] = 1;
$var_riserv['num_cond_ini_d_vett'] = 1;
$var_riserv['condizione_rip_o_vett'] = 1;
$var_riserv['azione_rip_o_vett'] = 1;
$var_riserv['num_cond_rip_o_vett'] = 1;
$var_riserv['condizione_rip_c_vett'] = 1;
$var_riserv['azione_rip_c_vett'] = 1;
$var_riserv['num_cond_rip_c_vett'] = 1;
$var_riserv['condizione_rip_p_vett'] = 1;
$var_riserv['azione_rip_p_vett'] = 1;
$var_riserv['num_cond_rip_p_vett'] = 1;
$var_riserv['condizione_rip_u_vett'] = 1;
$var_riserv['azione_rip_u_vett'] = 1;
$var_riserv['num_cond_rip_u_vett'] = 1;
$var_riserv['condizione_rip_d_vett'] = 1;
$var_riserv['azione_rip_d_vett'] = 1;
$var_riserv['num_cond_rip_d_vett'] = 1;
$var_riserv['break_cont'] = 1;
$var_riserv['data_inizio_selezione_f'] = 1;
$var_riserv['data_fine_selezione_f'] = 1;
$var_riserv['oggi_orig'] = 1;
$var_riserv['oggi_f'] = 1;
$var_riserv['testo_quotato_email_richiesta_orig'] = 1;
$var_riserv['id_pren'] = 1;
$var_riserv['arrotond_tasse'] = 1;
$var_riserv['apertura_rip_contr'] = 1;
$var_riserv['chiusura_rip_contr'] = 1;
$var_riserv['contratti_orig_mln'] = 1;
$var_riserv['contr_multilingua'] = 1;
$var_riserv['appartamento'] = 1;
$var_riserv['app_assegnabili'] = 1;
$var_riserv['apartment'] = 1;
$var_riserv['apartment_list'] = 1;
$var_riserv['apartamento'] = 1;
$var_riserv['lista_apartamentos'] = 1;
$var_riserv['n_utente_contr'] = 1;
$var_riserv['dati_app_contr'] = 1;
$var_riserv['tariffesettimanali'] = 1;
$var_riserv['incr_np'] = 1;
$var_riserv['filelock'] = 1;
$var_riserv['data_primo_arrivo'] = 1;
$var_riserv['data_ultima_partenza'] = 1;
$var_riserv['condizioni_alternative'] = 1;
$var_riserv['condizioni_alternative0'] = 1;
$var_riserv['num_condizioni_corr'] = 1;
$var_riserv['condizione_vett_corr'] = 1;
$var_riserv['num_cond_vett_corr'] = 1;
$var_riserv['azione_vett_corr'] = 1;
$var_riserv['dati_cat_pers'] = 1;
$var_riserv['cond_non_ripetute_applicate'] = 1;
$var_riserv['contratti_prenota'] = 1;
$var_riserv['nome_orig'] = 1;
$var_riserv['soprannome_orig'] = 1;
$var_riserv['cognome_orig'] = 1;
$var_riserv['data_nascita_orig'] = 1;
$var_riserv['documento_orig'] = 1;
$var_riserv['nazione_orig'] = 1;
$var_riserv['regione_orig'] = 1;
$var_riserv['citta_orig'] = 1;
$var_riserv['via_orig'] = 1;
$var_riserv['numcivico_orig'] = 1;
$var_riserv['telefono_orig'] = 1;
$var_riserv['telefono2_orig'] = 1;
$var_riserv['telefono3_orig'] = 1;
$var_riserv['fax_orig'] = 1;
$var_riserv['email_orig'] = 1;
$var_riserv['email2_orig'] = 1;
$var_riserv['email_certificata_orig'] = 1;
$var_riserv['cap_orig'] = 1;
$var_riserv['codice_fiscale_orig'] = 1;
$var_riserv['partita_iva_orig'] = 1;
$var_riserv['num_persone_orig'] = 1;
$var_riserv['caparra_orig'] = 1;
$var_riserv['commissioni_orig'] = 1;
$var_riserv['data_inizio_orig'] = 1;
$var_riserv['data_fine_orig'] = 1;
$var_riserv['num_periodi_orig'] = 1;
$var_riserv['orario_entrata_stimato_orig'] = 1;
$var_riserv['nome_tariffa_orig'] = 1;
$var_riserv['costo_tariffa_orig'] = 1;
$var_riserv['sconto_orig'] = 1;
$var_riserv['percentuale_tasse_tariffa_orig'] = 1;
$var_riserv['commento_orig'] = 1;
$var_riserv['origine_prenotazione_orig'] = 1;
$var_riserv['unita_occupata_orig'] = 1;
$var_riserv['unita_assegnabili_orig'] = 1;
$var_riserv['pagato_orig'] = 1;
$var_riserv['costo_tot_orig'] = 1;
$var_riserv['n_letti_agg_orig'] = 1;
$var_riserv['numero_prenotazione_orig'] = 1;
$var_riserv['data_inserimento_prenotazione_orig'] = 1;



?>