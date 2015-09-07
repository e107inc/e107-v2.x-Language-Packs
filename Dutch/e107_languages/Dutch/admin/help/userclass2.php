<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Dutch Language File.
|
|     $URL:$
|     $Revision:$
|     $Date:$
|     $Author: Erje, Yvalni, Tgtje $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Gebruikersklasse Hulp";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Stelt de gebruikersklassen in waartoe een nieuwe gebruiker automatisch bij aanmelding aan wordt toegevoegd. 
	Wanneer je verificatie hebt ingeschakeld, kan deze toewijzing plaatsvinden  wanneer de gebruiker zich aanmeld (niet log in), of wanneer de gebruiker is geverifiëerd.<br /><br />
	  En onthoudt ! wanneer je een hiërarchische gebruikersklasse in gebruik hebt, wordt de gebruiker automatisch toegevoegd als lid van ALLE klassen 'BOVEN' elke voorgeselecteerde klassen in de boomstructuur";
	break;
  case 'options' :
	$text = "De setup opties staan je het aanmaken en verwijderen toe van de standaard klasse hiërarchie. Je kunt het effekt bekijken door naar de boomstructuur gebruikers te kijken.<br />
	Dit zal de andere klasse informatie niet vernietigen, en je kunt de hiërarchie op een later tijdstip aanpassen of verwijderen.<br /><br />
	Het opnieuw instellen (herbouw) van de klasse hiërarchie zou eigenlijk alleen dienen plaats te vinden als database corruptie optreedt";
	break;
  case 'membs' :
    $text = "Nu op gebruikers beheer pagina";
	break;
  case 'debug' :
	$text = "Alleen voor geavanceerde gebruikers - toont de hiërarchie van de klassen, plus de toegewezen klassen en de klassen waartoe de eerste 20 site leden toegang hebben.<br />
	Het nummer vooraf aan de klassenaam heeft een uniek ID (referentie nummer). De 'Iedereen' klasse heeft een ID van 0 (nul). e107 gebruikt deze IDs overal om te refereren naar de klassen.<br />
	Achter de klassenaam staan de klasse zichtbaarheid en bewerkbaarheid - [vis:253, edit: 27] als voorbeeld. Dit betekent dat de klasse alleen zichtbaar is in de meeste selectoren, alleen dan wanneer de huidige gebruiker lid is van klasse 253, 
	en de gebruiker mag alleen het toebehoren aan klasse bewerken wanneer zij zelf toebehoren aan klasse 27.<br />
	Tenslotte, na de '=', is een lijst van alle klassen die boven of onder elke klasse bestaan in de boomstructuur, plus het ID van die klasse. Aldoende zal een gebruiker die toebehoort aan een speciale klasse
	 ook toebehoren aan alle klassen in deze lijst.<br /><br />
	Ter verduidelijking, het aan klasse-toebehoren van de eerste 20 gebruikers is weergegeven. De eerste invoer op elke regel toont de klassen waartoe de gebruiker behoort (lid van). De 
	 tweede invoer vertoont het toebehoren aan een/de klassse(n) van de gebruiker, wanneer deze dit heeft verkregen als overerving (denk aan ge-erfd). De derde invoer toont welk klasse toebehoren ze kunnen bewerken";
	break;
  case 'test' :
  case 'special' :
    $text = "Gebruik dit niet!!! Alleen voor de devs. !!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Je kunt klassen aanmaken, of bestaande klassen bewerken vanuit dit venster.<br />
         Dit is handig om gebruikers te beperken tot gebruik/toegang tot specifieke delen van de site. als voorbeeld, je kunt een lasse aanmaken genaamd TEST, 
		 dan een forum aanmaken voor toegang voor gebruikerklasse TEST, en dus alleen toegankelijk is voor gebruikers van deze klasse.<br /><br />
		 De klassenaam wordt getoond in drop-down lijsten en aanverwante; waarbij op enkele plaatsen een meegedetailleerde omschrijving ook getoond wordt.<br /><br />
		 Het klasse icoon kan ook op meerdere plaatsen op de site worden getoond, als dit is ingesteld.<br /><br />
		 Om gebruikers te laten beoordelen of zij ook tot een klasse kunnen behoren, sta ze toe dit te beheren. Wanneer je hier instelt 'niemand', kunnen alleen de beheerders
		 het toebehoren aan de klasse beheren.<br /><br />
		 Het 'zichtbaarheids' veld staat je toe de klasse te verbergen voor de meeste gebruikers - geldt voor enkele drop-down lijsten en aanvink-boxen.<br /><br />
		 De 'klasse ouder' staat het instellen van de klassen hiërarchie toe. Wanneer de 'top' van de hiërarchie 'Iedereen/Publiekelijk'is of 'Leden' klassen, dan hebben 
		 de klassen beneden dit in de hiërarchie ook de rechten van de ouder klasse waartoe ze behoren, en daarvan weer de ouder klasse, en zo verder (boven > beneden..&#8595). Wanneer de 'top' van de hiërarchie
		 dan 'Niemand' als klasse heeft, worden de rechten  in de tegenovergestelde rechten ingesteld - een klasse krijgt alle rechten van een klasse <b>beneden</b> hun in de boomstructuur  
		  (beneden > boven..&#8593). De resulterenede boomstructuur wordt onderaan de pagina getoond; je kunt deze uitklaapen door gebruik te maken van de '+' en '-' boxen.";
	break;
  case 'display' :
  default :
	$text = "Je kunt klassen kiezen ter bewerking, maar ook bestaande klassen verwijderen in dit venster.";
}
e107::getRender() -> tablerender($caption, $text);
?>