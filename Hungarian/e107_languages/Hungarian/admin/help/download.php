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

$text = "Töltsd fel a fájlokat a(z) ".e_FILE."downloads könyvtárba, a képeket a(z) ".e_FILE."downloadimages könyvtárba és a thumbnail képeket a(z) ".e_FILE."downloadthumbs könyvtárba.
<br /><br />
Letöltés felvételéhez, először hozz létre egy kezdőt, majd ez alatt készíts egy kategóriát, és ezek után tudsz felvinni letöltést.";
$ns -> tablerender("Letöltések súgó", $text);