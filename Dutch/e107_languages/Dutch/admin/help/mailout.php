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

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
	  $text = "Stuur een mail met de beperkingen die door een optionele plugin is gespecificeerd";
	  break;
	case 'debug' :
	  $text = "Alleen voor devs. Momenteel niet in gebruik";
	  break;
	case 'saved' :
	  $text = "Selecteer en gebruik een opgeslagen email template om een mailshot te verzenden. Verwijder elk niet meer in gebruik zijnd template";
	  break;
	case 'pending' :
		$text = "Lijst van de vrijgegeven mailshots voor verzending, samen met de huidige status. De mail taakplanner zal deze emails verwerken wanneer mogelijk, 
    rekening houdend de vroegste en laatst ingestelde verzend datums.";
		break;
	case 'held' :
		$text = "Lijst van klaarstaande emails voor verzending, maar nog niet vrijgegeven";
		break;
	case 'sent' :
	  $text = "Lijst van afgehandelde mailshots. Staat je toe de verzend resultaten te bekijken.<br />";
	  break;
	case 'savedmail' :
	case 'makemail' :
	  $text = "Maak een email aan, geef het een betekenisvolle titel, en selecteer de lijst van ontvangers. Je kunt alles als een template bewaren, of onmiddelijk versturen.<br />";
	  $text .= "Email adressen kunnen worden toegevoegd door plugins( zoals bv. nieuwsbrief), en dupllicaten worden verwijderd wanneer de mail wordt verzonden<br />";
	  $text .= "Elke bijlage wordt geselecteerd vanuit de lijst van geldige downloads.<br />";
	  $text .= "Mail mag worden verzonden als platte tekst (meest universeel, en kleinste kans op classificering als zijnde spam), of als HTML (in zulks geval wordt platte tekst als alternatief automatisch aangemaakt). De theme stijl
				mag optioneel worden toegevoegd aan de e-mail. Alternatief kan een vooringesteld template worden gekozen.";
	  break;
	case 'recipients' :
		$text = "Toon alle ontvangers of potentiële ontvangers van een e-mail, tesamen met hun huidge status.";
		break;
	case 'prefs' :
	  $text = "<b>Configureer mailshot opties.</b><br />
	  Een test e-mail wordt verzonden gebruikmakend van de huidge methode en instellingen.<br /><br />";
	  $text .= "<b>Email verzend Methode</b><br />
	  Gebruik SMTP wanneer mogelijk om te verzenden. De instellingen hiervoor zijn afhankelijk van de host's mail server.<br /><br />";
	  $text .= "<b>Standaard email formaat</b><br />
	  Emails mogen worden verzonden als alleen platte tekst, of in het HTML formaat. De laatst vernoemde geeft een mooier beeld weer, maar is gevoeliger voor filtering door verschillende
	  beveiligings maatregelen. Wanneer je HTML selecteert, zal een plat tekst deel worden toegevoegd.<br /><br />";
	  $text .= "<b>Bulk mail besturing</b><br />
	  De hier ingegeven waardes zijn afhankelijk van je host, en het totaal aantal van emails die je wenst te versturen; het is misschien mogelijk alle waarden op nul in te stellen zodat de
	  mail wachtrij nagenoeg onmiddelijk wordt geleegd.<br /><br />";
	  $text .= "<b>Gekaatste/Bounced Emails</b><br />
	  Je kunt een email adres specificeren om een berichtgeving te ontvangen wanneer een email niet kan worden afgeleverd (bounce genaamd of gekaatst). Wanneer je controle hebt over de/je server, kun je specificeren
	  tot het uitvoeren van een afzonderlijk taakplanning-aangedreven auto-processing script; dit ontvangt gekaatste berichten wanneer ze worden ontvangen, en werkt de status direkt bij. Anderzijds kun je een afzonderlijk account specificeren,
	  welke periodike wordt gecontroleerd (gebruikmakend van de taakplanner), of handmatig via het gebruikers opties menu. Normaliter is het een standaard
	  POP3 account; gebruik de TLS-gerelateerde opties alleen wanneer die specifiek door de host worden voorgeschreven.<br /><br />";
	  $text .= "<b>Email Adres Bronnen</b><br />
	  Wanneer je gebruikt maakt van toegevoegde mail gerelateerde plugins, kun je aangeven of zij email adressen mogen toevoegen aan de lijst.<br /><br />";
	  $text .= "<b>Loggen</b><br />
	  De loggen optie maakt een tekst bestand aan in de systeem log directorie. Deze dient periodiek geleegd te worden. De 'alleen
	  loggen' opties  staan je toe precies te bekijken wie emails zou ontvangen als werkelijk werd verzonden. De 'met fouten' optie mislukt bij elke
	  7de email, hoofdzakelijk voor testdoeleinden.";
	  break;
	 case 'maint' :
		$text = "Onderhoudsfuncties voor de mail database";
		break;
	default :
	  $text = "Niet gedocumenteerde optie";
  }

$ns->tablerender("Mail Hulp", $text);
?>