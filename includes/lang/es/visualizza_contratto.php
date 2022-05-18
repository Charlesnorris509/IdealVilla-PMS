<?php

switch ($messaggio) {

case "via":  				$messaggio = "calle"; break;
case "Torna indietro":  		$messaggio = "Volver atrás"; break;
case "Da":  				$messaggio = "Desde"; break;
case "A":  				$messaggio = "Para"; break;
case "Oggetto":  			$messaggio = "Asunto"; break;
case "Allega":  			$messaggio = "Adjuntar"; break;
case "Spedisci":  			$messaggio = "Enviar"; break;
case "L'email a":  			$messaggio = "El correo electrónico a"; break;
case "è stata inviata":  		$messaggio = "ha sido enviado"; break;
case "bcc a":  				$messaggio = "bcc a"; break;
case "Non si è potuto inviare l'email a":	$messaggio = "No se ha podido enviar el correo electrónico a"; break;
case "documento":  			$messaggio = "documento"; break;
case "<span class=\"colblu\">salvato</span> come":	$messaggio = "<span class=\"colblu\">salvado</span> como"; break;
case "Cancella il documento":  		$messaggio = "Borrar el documento"; break;
case "Cancella i documenti":  		$messaggio = "Borrar los documentos"; break;
case "Il documento":  			$messaggio = "El documento"; break;
case "è stato <b style=\"font-weight: normal; color: blue;\">cancellato</b>":	$messaggio = "ha sido <b style=\"font-weight: normal; color: blue;\">borrado</b>"; break;
case "Transazione <font color=\"red\">scaduta</font>":	$messaggio = "Transacción <font color=\"red\">caducada</font>"; break;
case "Sovrascrivi":  			$messaggio = " Sobreescribir"; break;
case "Documenti già esistenti riguardanti questa prenotazione":	$messaggio = "Documentos ya existentes de esta reserva"; break;
case "Documenti già esistenti riguardanti queste prenotazioni":	$messaggio = "Documentos ya existentes de estas reservas"; break;
case "Salva dei nuovi documenti":  	$messaggio = "Salvar nuevos documentos"; break;
case "Salva un nuovo documento":  	$messaggio = "Salvar un nuevo documento"; break;
case "<span class=\"colblu\">Attenzione</span>: una email con lo stesso oggetto è già stata inviata al cliente":	$messaggio = "<span class=\"colblu\">Atención</span>: una email con el mismo asunto ha sido ya enviada al cliente"; break;
case "Errore":  			$messaggio = "Error"; break;
case "ha scritto":  			$messaggio = "ha escrito"; break;
case "in data":  			$messaggio = "en la fecha"; break;
case "Non si è potuto mascherare il mittente dell'email perchè attualmente <b class=\"colwarn\">SPF non è configurato correttamente</b> sul dominio della email":	$messaggio = "No se ha podido enmascarar al remitente del correo electrónico porque actualmente <b class=\"colwarn\">SPF no está configurado correctamente</b> en el dominio de correo electrónico"; break;
case "L'utente amministratore può cambiare questa inpostazione in":	$messaggio = "El usuario administrador puede cambiar esta configuración en"; break;
case "configura e personalizza":  	$messaggio = "configurar y personalizar"; break;
case "È stato raggiunto il numero massimo di email giornaliere":	$messaggio = "Se ha alcanzado el número máximo de correos electrónicos diarios"; break;
case "Per mandare altre email l'utente amministratore può impostare un server remoto in":	$messaggio = "Para enviar más correos el usuario administrador puede configurar un servidor remoto en"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)



?>