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

if (!defined("PAGE_NAME")) { define("PAGE_NAME", "Taak planner"); }

// Menu
define("LAN_CRON_M_01", "Beheer");
define("LAN_CRON_M_02", "Ververs");

// Table heading
define("LAN_CRON_1", "Naam");
define("LAN_CRON_2", "Funktie");
define("LAN_CRON_3", "Tab");
define("LAN_CRON_4", "Laatst gedraaid");
define("LAN_CRON_5", "Actief");

// Default crons
define("LAN_CRON_01_1", "Test e-mail");
define("LAN_CRON_01_2", "Stuur een test e-mail naar [eml].");
 // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_01_3", "Aanbevolen om het scheduling systeem te testen.");

define("LAN_CRON_02_1", "e-mail wachtrij");
define("LAN_CRON_02_2", "Verwerk de e-mail wachtrij");

define("LAN_CRON_03_1", "e-mail weigering controle");
define("LAN_CRON_03_2", "Controleer op geweigerde e-mails.");

define("LAN_CRON_04_1", "Ban retrigger controleren");
define("LAN_CRON_04_2", "Verwerk geweigerde retriggers.");
define("LAN_CRON_04_3", "Alleen nodig als retriggering van blokkades ingeschakeld is..");

define("LAN_CRON_05_1", "Database Backup");
define("LAN_CRON_05_2", "Backup de systeem database naar");


// Error and info messages
define("LAN_CRON_6", "Kon voorkeuren niet importeren");
define("LAN_CRON_7", "Kon timing instellingen niet importeren");
define("LAN_CRON_8", "Geïmporteerde timing instellingen voor");

define("LAN_CRON_9", "[x] minuten en [y] seconden geleden"); // [x] and [y] are automatically replaced. 
define("LAN_CRON_10", "[y] seconden geleden");

define("LAN_CRON_11", "Actieve Crons");
define("LAN_CRON_12", "Laatste cron verversing");
define("LAN_CRON_13", "Wees er zeker van dat cron.php uitvoerbaar is.");
define("LAN_CRON_14", "Zet CHMOD /cron.php naar 755.");

define("LAN_CRON_15", "Gebruik het volgende Cron commando");
define("LAN_CRON_16", "Gebruik je server controle paneel (vb. cPanel, DirectAdmin, Plesk enz.) maak een crontab aan (commando) zodat dit elke minuut op je server draait");

// leave some room for additions/changes

// Info for checkCoreUpdate cron
define("LAN_CRON_20_1", "Controleer op een e107 Update");
define("LAN_CRON_20_2", "Controleer e107.org voor Core updates"); 
 // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_20_3", "Aanbeveling om het systeem up to date te houden");
define("LAN_CRON_20_4", "Werk bij met Git repository");
define("LAN_CRON_20_5", "Werk deze e107 installatie bij met de laatste Github bestanden.");
define("LAN_CRON_20_6", "Alleen aanbevolen voor developers.");
define("LAN_CRON_20_7", "Waarschuwing!");
define("LAN_CRON_20_8", "Kan je website instabiel maken!");


define("LAN_CRON_30", "Elke minuut");
define("LAN_CRON_31", "Om de andere minuut");
define("LAN_CRON_32", "Elke 5 minuten");
define("LAN_CRON_33", "Elke 10 minuten");
define("LAN_CRON_34", "Elke 15 minuten");
define("LAN_CRON_35", "Elke 30 minuten");

define("LAN_CRON_36", "Elk uur");
define("LAN_CRON_37", "Om het andere uur");
define("LAN_CRON_38", "Elke 3 uur");
define("LAN_CRON_39", "Elke 6 uur");

define("LAN_CRON_40", "Elke dag");
define("LAN_CRON_41", "Elke maand");
define("LAN_CRON_42", "Elke weekdag");

define("LAN_CRON_50", "Minuut(-uten):");
define("LAN_CRON_51", "Uur(ren):");
define("LAN_CRON_52", "Dag(en):");
define("LAN_CRON_53", "Maand(en):");
define("LAN_CRON_54", "Weekdag(en):");

define("LAN_CRON_BACKUP", "Backup");
define("LAN_CRON_LOGGING", "Loggen");
define("LAN_CRON_RUNNING", "Lopend...")

?>