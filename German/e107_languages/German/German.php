<?php

/*
 * e107 website system
 *
 * German translation by https://github.com/M0V3
 *
*/

setlocale(LC_ALL, 'de_DE.UTF-8', 'de_DE.utf8', 'deg_deg.utf8', 'de');
define("CORE_LC", "de");
define("CORE_LC2", "de");
// define("TEXTDIRECTION","rtl");
// deprecated: all language packs must be UTF-8
//define("CHARSET", "utf-8");  // for a true multi-language site. :)
define("CORE_LAN1", "Fehler : Theme fehlt.\\n\\nÄndere das verwendete Theme in den Einstellungen (Adminbereich), oder lade Dateien für das derzeite Theme hoch.");
//obsolete define("CORE_LAN2'," \\1 wrote:");// "\\1" represents the username.
//obsolete define("CORE_LAN3", "file attachment disabled");				// Not used in 0.8
define("CORE_LAN4", "Bitte lösche die install.php von deinem Server");
define("CORE_LAN5", "solltest du dies nicht tun, besteht ein Sicherheitsrisiko");
define("CORE_LAN6", "Die flood protection auf dieser Seite wurde aktiviert, weitere Anfragen in großer Menge können eine Sperrung nach sich ziehen.");
define("CORE_LAN7", "Der Kern versucht die Einstellungen aus einem automatischen backup wiederherzustellen.");
define("CORE_LAN8", "Kern Einstellungen Fehler");
define("CORE_LAN9", "Der Kern konnte die wiederherstellung nicht ausführen.");
define("CORE_LAN10", "Beschädigter cookie gefunden - ausgeloggt.");

// Footer
define("CORE_LAN11", "Aufbauzeit: ");
define("CORE_LAN12", " sek (");
define("CORE_LAN13", "% für Abfragen) ");
define("CORE_LAN14", "%2.3f cpu sek (%2.2f%% Auslastung, %2.3f Startup). Uhr: ");
define("CORE_LAN15", "DB Abfragen: ");
define("CORE_LAN16", "Speicher: ");

// img.bb
define("CORE_LAN17", "[ Bild deaktiviert ]");
define("CORE_LAN18", "Bild: ");

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "GB");
define("CORE_LAN_TB", "TB");

define("EMESSLAN_TITLE_INFO", "System Informationen");
define("EMESSLAN_TITLE_ERROR", "Fehler");
define("EMESSLAN_TITLE_SUCCESS", "Erfolgreich");
define("EMESSLAN_TITLE_WARNING", "Warnung");
define("EMESSLAN_TITLE_DEBUG", "System Debug");

define("LAN_EDIT","Bearbeiten");
define("LAN_DELETE","Löschen");
define("LAN_DEFAULT","Standard");
define("LAN_MORE", "Mehr..");
define("LAN_LESS", "..Weniger");
define("LAN_READ_MORE", "Weiterlesen..");
define("LAN_GOPAGE", "Zur Seite gehen");
define("LAN_GOTOPAGEX", "Zu Seite [x]");
define("LAN_GO", "Los");
define("LAN_SUBMIT", "Absenden");
define("LAN_NONE", "nichts");
define("LAN_WARNING", "Warnung!");
define("LAN_ERROR", "Fehler");
define("LAN_ANONYMOUS", "Anonym");
define("LAN_EMAIL_SUBS", "-email-");
define("LAN_ACTIVE","Aktiv");
define("LAN_YES", "Ja");
define("LAN_NO", "Nein");
define("LAN_OK", "OK");
define("LAN_ACTIONS", "Aktionen");
define("LAN_THANK_YOU", "Vielen Dank");
define("LAN_CONTINUE", "Weiter");
define("LAN_ENTER", "Eingabe");
define("LAN_ENTER_CODE", "Code eingeben");
define("LAN_INVALID_CODE", "Falscher code eingegeben.");
define("LAN_SEARCH", "Suchen");
define("LAN_VIEW", "Anzeigen");
define("LAN_CLICK_TO_VIEW", "Klicken um anzuzeigen");//TODO elsewhere
define("LAN_SORT", "Sortieren");
define("LAN_ORDER_BY", "Reihenfolge");
define("LAN_ASCENDING", "Aufsteigend");
define("LAN_DESCENDING", "Absteigend");
define("LAN_SHARE", "Teilen");
define("LAN_BACK", "Zurück");
define("LAN_NAME", "Name");
define("LAN_DESCRIPTION", "Beschreibung");
define("LAN_CANCEL","Abbrechen");
define("LAN_DATE","Datum");
define("LAN_DATE_POSTED", "Veröffentlichungsdatum");
define("LAN_POSTED_BY", "Veröffentlich von");
define("LAN_JSCONFIRM","Bist du sicher?");
define("LAN_IP","IP");
define("LAN_IP_ADDRESS","IP Adresse");
define("LAN_AUTHOR","Autor");
define("LAN_CATEGORY", "Kategorie");
define("LAN_GUEST", "Gast");
define("LAN_NEXT", "Nächste");
define("LAN_PREVIOUS", "Letzte");
define("LAN_LOGIN", "Einloggen");
define("LAN_LOGOUT", "Ausloggen");
define("LAN_SETTINGS", "Einstellungen");
define("LAN_PASSWORD", "Passwort");
define("LAN_INCORRECT_PASSWORD", "Falsches Passwort");
define("LAN_TYPE", "Typ");
define("LAN_SCREENSHOT", "Screenshot");
define("LAN_FILE", "Datei");
define("LAN_YOUTUBE_VIDEO", "Youtube Video");
define("LAN_YOUTUBE_PLAYLIST", "Youtube Playlist");
define("LAN_FILETYPES", "Dateitypen");
define("LAN_FILE_NOT_FOUND", "Datei nicht gefunden");
define("LAN_FILES","Dateien"); 
define("LAN_SIZE", "Größe");
define("LAN_VERSION", "Version");
define("LAN_DOWNLOAD", "Download");
define("LAN_WEBSITE", "Website");
define("LAN_COMMENTS", "Kommentare");
define("LAN_LOCATION", "Standort");
define("LAN_NO_RECORDS_FOUND", "Keine Einträge gefunden");
define("LAN_RATING", "Bewertung");
define("LAN_IMAGE", "Bild");
define("LAN_ABOUT", "Über");
define("LAN_TITLE", "Titel");
define("LAN_MESSAGE", "Nachricht");
define("LAN_USER", "Benutzer");
define("LAN_EMAIL","Email Adresse");
define("LAN_WROTE", "schrieb"); // as in John wrote.."  ";
define("LAN_RE_ORDER", "Neu anordnen");
define("LAN_RELATED", "Verwandt");
define("LAN_CLOSE", "Schließen");
define("LAN_EXPAND", "Erweitern");

define("LAN_ENTER_USRNAME_EMAIL", "Bitte Benutznamen und Passwort eingeben"); // admin php hover field admin name
define("LAN_PWD_REQUIRED", "Passwort ist erforderlich"); // admin php hover field admin password
define("LAN_SHOW", "Anzeigen");
define("LAN_GENERATE", "Generieren");
define("LAN_SUMMARY", "Zusammenfassung");  // TODO   more files use summary replace
define("LAN_REQUIRED_BLANK", "Erforderliche Felder wurden nicht ausgefüllt.");
define("LAN_PLEASEWAIT", "Bitte warten");
define("LAN_CHOOSE_FILE", "Datei auswählen");

?>
