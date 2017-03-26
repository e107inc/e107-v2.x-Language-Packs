<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Dutch Language File.
|
|     $URL:$
|     $Revision:$
|     $Date:$
|     $Author: Yvalni, Tgtje $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Systeem Logs Hulp";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Data filters</b><br />
  Je kunt specifiek verschillende filters instellen welke de hoeveelheid van te weergeven data laten zien. Deze blijven bewaard in een cookie tot moment van uitloggen.<br /> <br />
  De start en eind datum/tijd filters dienen middels hun respectievelijke keuzeboxen te worden ingeschakeld.<br />
  Andere filters zijn actief wanneer er een waarde in het veld staat.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Deze pagina geeft de door jou gekozen gebruikersactiviteit weer die gelogd dient/de te worden.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Deze pagina configureert verschillende opties voor de systeem logs.<br /><br />
  <b>Algemene Instellingen</b><br />
  Stelt het aantal regels in op log weergave.<br /><br />
  <b>Beheerder Log</b><br />
  Dit log bewaart gebeurtenissen tot specifiek verwijderen is gekozen; gebruik deze optie om oude geburtenissen te verwijderen.<br /><br />
  <b>Gebruikers Audit Log</b><br />
  Dit log houdt gebruikersactiviteit bij. Voor geregistreerde gebruikers, worden alleen zij die aan een specifieke klasse behoren bijgehouden - je kunt dit of 'Leden' maken om iedereen bij te houden, of een specifieke klasse aanmaken voor dit doel. Je kunt dan bepalen welke activiteiets typen je wilt loggen.<br />
  Registratie gebeurtenissen kunnen overzonderlijk worden bijgehouden.<br /><br />
  <b>Doorlopend Log</b><br />
  Dit log wordt gebruikt voor bijhouden van abnormale gebeurtenissen, helpen met debuggen enz.. Het kan worden gedeactiveerd. Gebeurtenissen worden automatisch verwijdert na het bereiken van de vooraf ingestelde aantal dagen.
  ";
  break;
case 'rolllog' :
  $text = "Het doorlopend log geeft verschillende abnormale gegevens weer, welke normaliter niet anders gelogd worden. Het kan ook gebruikt worden voor debuggen van code en overzicht houden.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Deze pagina geeft gebruiker(-s) downloads weer.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Deze pagina geeft gebruikers reacties weer, met te kiezen opties als gebruikers ID, type en datum. Niet gewenste reacties kunnen worden verwijderd.";
  break;
case 'detailed' :
  $text = "De gebruikte opslagtijden van het hoofd systeem voor loggen zijn uitermate nauwkeurig (wanneer de onderliggende server dit ondersteunt), en deze pagina staat toe om het geburen binnen een relatief klein tijdsvenster te bekijken. Invoer van het beheer log, audit log en doorlopend log zijn samengevoegd, opdat je precies de samenhang tussen de gebeurtenissen kunt bekijken.";
  break;
case 'adminlog' :
default :
  $text = "Deze pagina toont beheerder activiteit.<br /><br />
  (Momenteel wordt meer logging nog toegevoegd aan de code, daarom is de lijst nog niet kompleet.)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
?>