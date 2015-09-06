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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/cache.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Caching";
$text = "Als je caching aanzet, zal de snelheid van je site aanzienlijk toenemen en de hoeveelheid database aanroepen sterk verminderen.<br /><br /><b>LET OP! Als je je eigen Thema maakt, zet dan caching uit, omdat anders de wijzigingen niet worden getoond.</b>";
$ns -> tablerender($caption, $text);
?>