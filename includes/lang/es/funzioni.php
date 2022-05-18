<?php

switch ($messaggio) {

case "<div style=\"display: inline; color: red;\">ERRORE</div> di scrittura del file":  		$messaggio = "<div style=\"display: inline; color: red;\">ERROR</div> de escritura del archivo"; break;
case "Nome utente":  				$messaggio = "Nombre de usuario"; break;
case "Password":  				$messaggio = "Contraseña"; break;
case "Entra":  					$messaggio = "Entrar"; break;
case "Login per HotelDruid":  			$messaggio = "Login para HotelDruid"; break;
case "Sessione <div style=\"display: inline; color: red;\">scaduta</div>":	$messaggio = "Sesión <div style=\"display: inline; color: red;\">expirada</div>"; break;
case "Nome utente o password <div style=\"display: inline; color: red;\">errati</div>":	$messaggio = "Nombre de usuario o contraseña <div style=\"display: inline; color: red;\">equivocados</div>"; break;
case "Numero eccesivo di login <div style=\"display: inline; color: red;\">errati</div> negli ultimi":	$messaggio = "Número excesivo de logins <div style=\"display: inline; color: red;\">equivocados</div> en los últimos"; break;
case "minuti":  				$messaggio = "minutos"; break;
case "Dopo un login <div style=\"display: inline; color: red;\">errato</div> si devono attendere":	$messaggio = "Despues de un login <div style=\"display: inline; color: red;\">equivocado</div> hay que esperar"; break;
case "secondi":  				$messaggio = "segundos"; break;
case "Il database deve essere aggiornato":  	$messaggio = "Hay que actualizar la base de datos"; break;
case "Aggiorna":  				$messaggio = "Actualizar"; break;
case "Mancano solo":  				$messaggio = "Faltan solo"; break;
case "tentativi prima del blocco dei login": 	$messaggio = "intentos antes del bloqueo del login"; break;
case "Manca solo":  				$messaggio = "Falta solo"; break;
case "tentativo prima del blocco dei login":	$messaggio = "intento antes del bloqueo del login"; break;
case "È possibile reimpostare la password dal proprio account di hosting":	$messaggio = "Es posible restablecer la contraseña desde su cuenta de hosting"; break;
case "orario del server":  			$messaggio = "horario del servidor"; break;
case "Avviso":  				$messaggio = "Aviso"; break;
case "Mancano meno di":  			$messaggio = "Faltan menos de"; break;
case "giorni alla scadenza dell'account":  	$messaggio = "días al vencimiento de la cuenta"; break;
case "Numero eccesivo di sessioni <span style=\"color: red;\">errate</span> originate dal tuo indirizzo IP negli ultimi":	$messaggio = "Número excesivo de sesiones <span style=\"color: red;\">equivocadas</span> desde tu dirección IP en los últimos"; break;
case "È possibile che qualcuno dalla tua stessa rete stia tentando di rubare il tuo accesso":	$messaggio = "Es posible que alguien desde tu misma red esté intentando robar tu acceso"; break;
case "":  		$messaggio = ""; break;
case "":  		$messaggio = ""; break;

} # fine switch ($messaggio)

?>