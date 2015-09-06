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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/download.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Upload je bestanden naar de ".e_FILE."downloads map, de afbeeldingen naar de ".e_FILE."downloadimages map en de thumbnail afbeeldingen naar de ".e_FILE."downloadthumbs map.
<br /><br />
Om een download aan te melden moet je eerst een hoofdcategorie creëren en daarna een categorie onder deze hoofdcategorie. Daarna kun je de download beschikbaar stellen.";
$ns -> tablerender("Download Hulp", $text);
?>