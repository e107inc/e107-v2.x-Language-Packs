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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/filemanager.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "In dit scherm kun je de bestanden in de map e107_files/ beheren. Als je bij het uploaden foutmeldingen over onvoldoende rechten ziet, dan is de map niet beschrijfbaar. Zorg ervoor dat de map de juiste schrijfrechten heeft (CHMOD is systeem afhankelijk, hou het zo laag mogelijk). Voor meer informatie en de mogelijkheden wat betreft CHMOD verwijzen wij je naar je hosting provider.";
$ns -> tablerender("Bestandsbeheer Hulp", $text);
?>