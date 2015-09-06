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


define("LAN_VALIDATE_0",   "Onbekende fout");
define("LAN_VALIDATE_101", "Waarde niet bekend");
define("LAN_VALIDATE_102", "Onverwacht waarde type");
define("LAN_VALIDATE_103", "Incorrecte karakters gevonden");
define("LAN_VALIDATE_104", "Dit si geen geldig email adres");
define("LAN_VALIDATE_105", "Velden komen niet overeen");
define("LAN_VALIDATE_131", "Invoer te kort");
define("LAN_VALIDATE_132", "Invoer te lang");
define("LAN_VALIDATE_133", "Nummer te laag");
define("LAN_VALIDATE_134", "Nummer te hoog");
define("LAN_VALIDATE_135", "Array count too low");
define("LAN_VALIDATE_136", "Array count too high");
define("LAN_VALIDATE_151", "Aantal van het type integer verwacht");
define("LAN_VALIDATE_152", "Aantal van het type float verwacht");
define("LAN_VALIDATE_153", "Subsysteemtype verwacht");
define("LAN_VALIDATE_154", "Reeks type verwacht");
define("LAN_VALIDATE_191", "Lege waarde");
define("LAN_VALIDATE_201", "Bestand bestaat niet");
define("LAN_VALIDATE_202", "Bestand is niet beschrijfbaar");
define("LAN_VALIDATE_203", "Bestand overtreft toegestane bestandsgrootte");
define("LAN_VALIDATE_204", "Bestandsgrootte is lager dan minimaal toegestaan");

/*
 * TRANSLATION INSTRUCTIONS:
 * Don"t translate %1$s, %2$s, %3$s, etc.
 * 
 * These are substituted by validator handler:
 * %1$s - field name
 * %2$d - validation error code (number)
 * %3$s - validation error message (string)
 */

// define("LAN_VALIDATE_FAILMSG", "<strong>&quot;%1$s&quot;</strong> validation error: [#%2$d] %3$s.");

 //FIXME - use this instead: 
define("LAN_VALIDATE_FAILMSG", "[x] validatie fout: [y] [z].");

?>