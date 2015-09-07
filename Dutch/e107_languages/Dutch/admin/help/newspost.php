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

$caption = "Nieuwsberichten hulp";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';
switch ($action)
{
  case 'create' :
	$text = "<b>Algemeen</b><br />
De tekst wordt getoond op de hoofdpagina, uitgebreide tekst wordt getoond door op de 'Lees verder' link te klikken. Herkomst en URL verwijst naar de bron waar het bericht vandaan komt.
<br />
<br />
<b>Toon alleen de titel</b>
<br />
Activeer deze optie om alleen de titel weer te geven. Klikken op de titel leidt vervolgens naar de tekst.
<br /><br />
<b>Activering</b>
<br />
Als je de start en/of einddatum invoert, wordt het bericht alleen tussen deze data weergegeven.
";
	break;
  case 'cat' :
	$text = "Je kunt de nieuws items in verschillende categoriën indelen, en bezoekers toestaan alleen die items in die categoriën te tonen, <br /><br />Upload je nieuws icoon-afbeelding of in ".e_THEME."-jouwtheme-/images/ of themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = "Instellen verschillende nieuws gerelateerde opties<br /><br />
	<b>Nieuws Categorie Kolommen</b><br />
	Theme ondersteuning is noodzakelijk om selecteerbaar te zijn.<br /><br />
	<b>Nieuws berichten te tonen per pagina</b><br />
	Voor de hoofdpagina van nieuws; toont items in niet uitgebreid formaat.<br /><br />
	<b>Nieuws berichten te tonen in archief</b><br />
	Stelt het aantal nieuwsberichten in welke getoond worden als alleen titel, op elke nieuwspagina ( inclusief in het vorige totaal).<br /><br />
	<b>Inschakelen WYSIWYG editor</b><br />
	Vereist dat gebruikers die nieuws kunnen insturen ook HTML kunnen plaatsen.
	";
	break;
  case 'list' :
  default :
	$text = "Lijst van alle nieuws items. Bewerken of veriwjderen, klik op een van de iconen in de \'opties\' kolomn. Om het item te bekijken, klik op de titel.";
}
$ns -> tablerender($caption, $text);
?>