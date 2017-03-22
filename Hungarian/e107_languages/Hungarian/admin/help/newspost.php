<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/04/22 13:08:21
|
|        $Author: Yesszus $
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Hirek - Súgó";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';
switch ($action)
{
  case 'create' :
	$text = "<b>Általános</b><br />
A törzs a főoldalon fog megjelenni, míg a bővített a 'Tovább' linkre kattintva lesz olvasható.
<br />
<br />
<b>Csak a cím mutatása</b>
<br />
Ennek engedélyezésekor a főoldalon csak a hír címe jelenik meg,egy kattintható linkkel a teljes szöveghez.
<br /><br />
<b>Aktiválás</b>
<br />
Ha megadsz egy kezdési és/vagy befejezési dátumot, akkor a cikk csak a két időpont közt jelenik meg.
";
	break;
  case 'cat' :
	$text = "You can separate your news items into different categories, and allow visitors to display only the news items in those categories. <br /><br />Upload your news icon images into either ".e_THEME."-yourtheme-/images/ or themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Set various news-related options<br /><br />
	<b>News Category Columns</b><br />
	Requires theme support to be selectable<br /><br />
	<b>News posts to display per page</b><br />
	For the main news page; displays items in unextended format.<br /><br />
	<b>News posts to display in archive</b><br />
	Sets the number of news posts which are displayed as title only on each news page (included in the previous total).<br /><br />
	<b>Enable WYSIWYG editor</b><br />
	Requires that users who can submit news can also post HTML.
	';
	break;
  case 'list' :
  default :
	$text = 'Az összes hír listája. Szerkesztéséhez vagy törléséhez kattintson az egyik ikonra az \'Opciók\' oszlopban. Az elem megtekintéséhez, kattintson az ID azonosítóra.';
}
$ns -> tablerender($caption, $text);
