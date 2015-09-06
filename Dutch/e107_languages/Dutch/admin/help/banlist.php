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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/banlist.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Blokkeer toegang tot je site";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
  $text = "Deze pagina staat je toe om blokkeer data van en naar de site te verplaatsen als CSV (Comma Separated Variable; komma gesepareerd) bestanden.<br /><br />";
  $text .= "<b>Data Export</b><br />
  Selecteer de typen van blokkades voor exporteren. De velden worden afgebakent door de gekozen separatoren, en optioneel ingevoegd binnen de geselcteerde aanhalingstekens.<br /><br />";
  $text .= "<b>Data Import</b><br />
  Je kunt kiezen of de geimporteerde blokkades de bestaande vervangen, of tot de lijst worden toegevoegd. Wanneer de import data een vervaldatum/tijd bevat, kun
  selecteren of dit wordt gebruikt, of dat de waarde voor deze site wordt gebruikt.<br /><br />";
  $text .= "<b>CSV Formaat</b><br />
  Het formaat van elke regel in het bestand is: IP/email, datum, verval, type, reden, opmerkingen.<br />
  Datum en verval zijn in het formaat YYYYMMDD_HHMMDD, uitgezonderd dat een nul waarde betekent 'onbekend'of 'onbegrensd'. <br />
  Alleen het IP of email adres is essentiëel; de andere velden worden geimporteerd als ze bestaan.<br /><br />
  <b>Opmerking:</b> Je zult filetypes.xml moeten aanpassen, zodat beheerders de mogelijkheid hebben tot uploaden van het 'CSV' bestands type.";
  break;
case 'times' :
  $text = "Deze pagina stelt het standaard gedrag in voor verschillende typen van blokkades.<br />
  Wanneer een bericht is gespecificeerd, wordt het getoond aan de gebruiker (waar toepasselijk). Wanneer het bericht start meth \'http://\' or \'https://\' wordt controle doorgegeven aan de beschreven URL. 
  Anders zal de grbuiker mogelijk een blanke pagina te zien krijgen.<br />
  De blokkade is van toepassing voor de ingestelde tijdsduur; het wordt opgeheven wanneer zij weer de site betreden.";
  break;
case 'options' :
  $text = "<b>Omgekeerd DNS</b><br />
    Indien ingeschakeld, zal het gebruikers IP adres worden getraceerd (look up) om het geassociëerd domein te verkrijgen. Dit contacteerd een externe server, dus mogelijk is er een vertraging voordat de informatie beschikbaar is
	- en wanneer die server offline is,mogelijk een hele lange vertraging.<br /><br />
	Je kunt kiezen voor server namen te doen traceren bij alle site bezoeken, of alleen bij een nieuwe blokkade.<br /><br />
	<b>Maximum Toegangs Waarde</b><br />
	Dit stelt het maximum aantal toegestane site bezoeken in van een enkele bezoeker of IP adres in een 5 minuten periode, en is bedoeld tot het detecteren van
	denial of service aanvallen (DDoS). Bij 90% van het geselecteerde limiet, krijgt de gebruiker een waarschuwing; bij bereiken van de maximumwaarde volgt een blokkade.
	Verschillende drempelwaardes kunnen worden ingesteld voor gasten en ingelogde gebruikers.<br /><br />
	<b>Hertrigger BLokkade Periode</b><br />
	Deze optie is alleen van belang wanneer de optie voor blokkade een specifieke tijdsduur heeft, ipv oneindig wordt gebruikt. Wanneer ingeschakeld, 
	en de gebruiker probeert opnieuw toegang te verkrijgen, wordt de blokkadetijd verlengd (alsof de blokkade pas net is gestart).
	";
  break;
case 'edit' :
case 'add' :
$text = "Je kunt in dit scherm gebruikers de toegang tot je site ontzeggen.<br />
Dat kan ofwel met volledige IP-adres of met jokertekens om een hele serie IP-adressen te blokkeren. Je kunt ook een e-mailadres opgeven om te verhinderen dat iemand zich aanmeldt als lid.<br /><br />
<b>Blokkeren op IP adres:</b><br />
Het invoeren van het IP adres 123.123.123.123 blokkeert toegang tot je site vanaf dat ip-adres.<br />
Het invoeren van het ip adres 123.123.123.* of 204.98.*.*  verhindert toegang tot je site vanaf deze hele serie adressen.<br /> (Merk op dat er steeds vier! groepen van jokertekens en/of cijfers moeten zijn)<br /><br />
IPV6 formaat adressen worden ook ondersteund, inclusief '::' ter representatie van een blok van nul waardes. Elk paar van cijfers in het eind veld mogen afzonderlijke jokertekens zijn<br /><br />
<b>Blokkeren van e-mailadressen</b><br />
Het invoeren van het e-mailadres foo@bar.com verhindert dat iemand zich met dat e-mailadres aanmeldt op je site.<br />
Het invoeren van het e-mailadres *@bar.com voorkomt dat iemand met een e-mailadres van dat domein aanmeldt';
Dit wordt gedaan vanaf de leden beheerpagina.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "Je kunt bekende IP adressen van wie je weet dat ze 'vriendeljk' zijn hier ingeven - normaliter zulke van de hoofdsite beheerder(s), zodat zij ten alle tijden toegang hebben)
   tot de sitealways gain access to the site.<br />
  Advies is het aantal adressen in deze lijst tot een minimum te beperken; zowel uit beveiligings oogpunt, maar ook reduceren van mogelijke invloed op site prestatie.";
  break;
case 'banlog' :
  $text = "Dit toont een lijst van alle site toegangen toebehorend aan een adres welk in de blokkadelijst bestaat, of in de witte lijst. De kolom \'reden\' vertoont welke.";
  break;
case 'white' :
  $text = "Deze pagina toont een lijst van alle IP en email adressen die expliciet zijn toegestaan.<br />
    Deze lijst heeft voorrang boven de blokkade lijst - het zou niet mogelijk moeten zijn een adres uit deze lijst te blokkeren.<br />
	Alle adressen dienen handmatig te worden ingevoerd .";
  break;
case 'list' :
default :
$text = "Deze pagina toont een lijst van alle IP adressen, hostnamen en emailadressen die geblokkeerd staan. 
(Geblokkeerde gebruikers staan op de gebruikers beheer pagina)<br /><br />
<b>Automatische Blokkade</b><br />
e107 blokkeert automatisch IP adressen wanneer zij pogen de site te flooden (overspoelen), maar ook adressen met een mislukte login.<br />
Deze blokkades worden ook op de lijst getoond. Je kunt kiezen (opties pagina) wat te doen voor elk type blokkade.<br /><br />
<b>Blokkade verwijdering</b><br />
Je kunt een verval periode instellen voor elk type blokkades, wat resulteert in blokkade opheffing wanneer de tijdslimiet is verlopen. Anderzijds blijft de blokkade totdat je het verwijderd.
<br />
Je kunt de periode wijzigen vanaf deze pagina - tijden worden vanaf dit tijdstip berekent.";
}
$ns -> tablerender($caption, $text);
?>