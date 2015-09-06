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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/ugflag.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Wanneer je e107 doet upgraden of je website tijdelijk  offline wil halen vink dan even de onderhoudsbox aan, en je bezoekers worden verwezen naar een pagina welke hen uitlegt dat de site in onderhoudmodus is. Wanneer je klaar bent met de werkzaamheden, haal dan het vinkje weer weg, en je site is weer actief voor de bezoekers.";

$ns -> tablerender("Onderhoud", $text);
?>