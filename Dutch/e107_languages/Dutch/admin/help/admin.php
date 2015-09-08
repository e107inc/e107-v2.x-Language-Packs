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

$caption = "Beheerscherm";
$text = "Deze pagina geeft een overzicht van de website activiteiten.<br /><br />";
if(e107::getPref('admincss')=='admin_dark.css')
{
	$text .= "<small>Thema te donker? <a class='btn btn-mini btn-inverse' href='".e_ADMIN."theme.php?mode=admin'>Verander het hier</a></small>";	
	
}
$ns -> tablerender($caption, $text);
?>