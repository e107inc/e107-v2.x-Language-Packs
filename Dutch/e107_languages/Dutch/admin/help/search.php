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

$caption = "Zoeken Hulp";
$text = "
	Wanneer je MySQL server versie het ondersteunt kun je omschakelen naar de MySQL sorteer methode welke sneller is dan de PHP sorteer methode.<br>Zie optie voorkeuren bovenaan.
<br /><br />
	Indien jouw site gebruik maakt van karakter-georiënteerde talen zoals Chinees en Japans dien je de de PHP sorteer methode te gebruiken en het gebruik ' uitsluitend hele woorden' uit te schakelen.

";
$ns->tablerender($caption, $text);
?>