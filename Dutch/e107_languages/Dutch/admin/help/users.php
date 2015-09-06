<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Gebruikers Beheer";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Middels deze pagina kun je een gebruiker aanmaken, welke direkt wordt toegewezen als zijnde een standaard site gebruiker, met eender welke klasse die je kunt toewijzen.<br /><br />
	Wanneer je 'Verstuur bevestigingsmail met wachtwoord aan nieuwe gebruiker' in box aanvinkt, wordt de login naam en wachtwoord verzonden <b>zichtbaar</b>, en dient de gebruiker
	het wachtwoord na ontvangst te wijzigen.
	";
    break;

  case 'prune' :
	$text = "Bulk verwijderd niet gewenste gebruikers uit de database. Deze kunnen bestaan uit diegene die het hebben nagelaten het registratieproces te voltooien, of 
	diegene wiens email adres is gekaatst. Elk forum bericht, reactie enz. blijft wel bestaan, en worden 'gevlagd'als zijnde van een 'Verwijderde Gebruiker'.
	";
	break;

  case 'unverified' :
	$text = "Toont die gebruikers welke het registratieproces niet hebben voltooid. Opties zijn algemeen gelijk aan de complete gebruikerslijst.";
    break;

  case 'options' :
	$text = "Instelling verschillende opties welke invloed hebben op alle gebruikers.<br /><br />
	<b>Avatar Upload Toestaan</b><br />
	Wanneer ingeschakeld kunnen gebruikers een avatar naar eigen keuze uploaden, welke op de server wordt opgeslagen. Dit kan een beveiligingsrisico met zich meebrengen.<br /><br />
	<b>Foto Upload Toestaan</b><br />
	Wanneer ingeschakeld kunnen gebruikers een foto naar eigen keuze uploaden, welke op de server wordt opgeslagen. Dit kan een beveiligingsrisico met zich meebrengen.<br /><br />
	<b>Online Gebruiker Tracking</b><br />
	Dit dient te worden ingeschakeld om gebuikers activiteit te tracken, inclusief telling van online zijnde gebruikers. Het verhoogt echter merkbaar de database activiteit.<br /><br />
	<b>Gebruikers Informatie</b><br />
	Bepaald welke klasse van de gebruikers de gebruikerslijst mogen bekijken.
	";
    break;

  default :
	$text = "Met dit scherm kun je de geregistreerde leden van je site beheren. Je kunt o.a. hun instellingen wijzigen, hen beheerdersrechten geven en hun gebruikersklasse instellen.<br /><br />
	De sortering hoe kan worden verandert door te klikken op het kolom hoofd.<br />
	De weergegeven kolommen kunnen worden gewijzigd door klikken op 'Bewerk Weergave Opties', selecteren van benodigde kolommen, en daarna klikken op 'Zoeken/Verversen'<br /><br />
	<b>Info</b><br />
	Toont gebruikersprofiel van deze gebruiker ( kunt ook klikken op hun weergave naam)<br /><br />
	<b>Bewerk</b><br />
	Bewerk de instellingen van deze gebruiker. <br /><br />
	<b>Blokkeer/De-blokkeer</b><br />
	Bepaald of de gebruiker toegang to de site heeft. <br /><br />
	<b>Activering</b><br />
	Dit activeert (direkt) een gebruiker die normaliter zou hebben gereageerd op de activerings email.<br /><br />
	<b>Email opnieuw versturen</b><br />
	Verstuurt de activerings email opnieuw aan de gebruiker.<br /><br />
	<b>Test email</b><br />
	Controleert het email adres van de gebruiker op bruikbaarheid (doet geen mail verzenden)<br /><br />
	<b>Instellen Klasse</b><br />
	Stelt de klasse waar een gebruiker aan gaat toebehoren in.<br /><br />
	<b>Verwijderen</b><br />
	Verwijdert in totaal alle lidmaatschappen waartoe de gebruiker behoort (elk forum bericht, reactie enz. blijft wel bestaan, en worden 'gevlagd' als zijnde van een 'Verwijderde Gebruiker').
	";
}


$ns -> tablerender($caption, $text);
unset($text);
?> 