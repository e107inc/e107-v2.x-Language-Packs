<?php
/*
+--------------------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/04/22 13:08:21
|
|        $Author: Yesszus $
|        Web: https://github.com/yesszus/e107-v2.x-Language-Packs/releases
|
+--------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Admin Menü";
$text = "Ezen az oldalon láthatja a weboldal aktivitásokat.<br /><br />";

if(e107::getPref('admincss')=='admin_dark.css' && deftrue('BOOTSTRAP') !== 3)
{
	$text .= "<small>Túl sötét a theme? <a class='btn btn-default btn-xs btn-mini btn-inverse' href='".e_ADMIN."theme.php?mode=admin'>Változtassa meg itt</a></small>";
	
}

e107::getRender()->tablerender($caption, $text);
?>