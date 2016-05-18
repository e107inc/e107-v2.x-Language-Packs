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



$text = "<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_core.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Mag Fájl</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_warning.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Ismert bizonytalanság</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_check.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Mag Fájl (Integritált)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_fail.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Mag Fájl (Nem Integritált)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_uncalc.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Core Mag Fájl (Kiszámíthatatlan)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_missing.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Hiányzó Core Mag Fájl</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_old.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Régi Core Mag Fájl</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_unknown.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Nem Core Mag Fájl</div>";
$ns -> tablerender("File Key", $text);

$text = "A fájl ellenőr ellenőrzi és elemzi a fájlokat a szerver oldalon. Amikor az ellenőr e107 core fájlt talál, 
ellenőrzi a fájlkonzisztenciát, hogy megbizonyosodjon arról sérült-e az.";

$text .= "<br /><br />
<a href='".e_SELF."?create'>Klikk ide a plugin fájlok pillanatkép létrehozásához a fájl ellenőrző használatával.</a>";

if ($pref['developer']) {
$text .= "<br /><br />
A kiegészítő szöveg párosító eszköz (fejlesztő módban) lehetővé teszi, hogy átvizsgálja a fájlokat a szerveren a szöveges karakterláncok
reguláris kifejezések segítségével. A regex motor használata PHP <a href='http://php.net/pcre'>PCRE</a>
(A preg_ * funkciók), így adja meg a lekérdezés #minta# módosító mezőben.";
}

$ns -> tablerender("Fájl Ellenőrző Súgó", $text);