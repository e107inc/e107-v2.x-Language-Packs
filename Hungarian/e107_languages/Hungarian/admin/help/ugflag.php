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

$text = "A webhely karbantartásakor, vagy az e107 frissítések során előfordulhat, hogy az oldalt ideiglenesen át kell kapcsolni karbantartás üzemmódra. Ebben a módban a látogatók át lesznek irányítva egy információs oldalra, ahol arról értesülnek, hogy a webhely karbantartás alatt áll. Ebben az üzemmódban a bejelentkezés csak az adminisztrátoroknak lehetséges az e107_admin/admin.php oldalon. A karbantartás kikapcsolásakor az oldal visszatér a normál működéséhez.";

$ns -> tablerender("Karbantartás Súgó", $text);
?>