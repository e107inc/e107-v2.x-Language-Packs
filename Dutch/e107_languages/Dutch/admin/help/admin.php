<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
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