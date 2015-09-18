<?php

// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if (!defined('e107_INIT')) { exit; }

$caption = "Tableau de bord";
$text = "Cette page vous donne un aperçu de l'activité du site.<br /><br />";

if(e107::getPref('admincss')=='admin_dark.css' && deftrue('BOOTSTRAP') !== 3)
{
	$text .= "<small>Thème trop sombre ? <a class='btn btn-default btn-xs btn-mini btn-inverse' href='".e_ADMIN."theme.php?mode=admin'>Changez-le ici</a></small>";
	
}

e107::getRender()->tablerender($caption, $text);
