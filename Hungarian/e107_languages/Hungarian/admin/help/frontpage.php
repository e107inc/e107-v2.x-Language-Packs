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

$caption = "Kezdőlap súgó";
$text = "
<p>Kiválaszthatod, hogy mi jelenjen meg a főoldalon. Ez alapértelmezésben az index oldal. Beállíthatod ún. 'splashscreen'-nek is, ami csak a felhasználó első látogatásakor jelenik meg.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');
?>