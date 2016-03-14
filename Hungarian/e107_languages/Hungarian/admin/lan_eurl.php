<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/02/23 11:48:14
|
|        $Author: Yesszus $
+---------------------------------------------------------------+
*/

define("LAN_EURL_NAME", "URL kezelő");
define("LAN_EURL_NAME_CONFIG", "Profilok");
define("LAN_EURL_NAME_ALIASES", "Álnevek");
define("LAN_EURL_NAME_SETTINGS", "Általános beállítások");
define("LAN_EURL_NAME_HELP", "Súgó");
define("LAN_EURL_EMPTY", "A lista üres");
define("LAN_EURL_LEGEND_CONFIG", "Válassz egy URL profilt oldal-területenként");
define("LAN_EURL_LEGEND_ALIASES", "Base URL álnév beállítása URL profilonként");
define("LAN_EURL_DEFAULT", "Alapértelmezett");
define("LAN_EURL_PROFILE", "Profil");
define("LAN_EURL_INFOALT", "Információ");
define("LAN_EURL_PROFILE_INFO", "Profil információ nem elérhető");
define("LAN_EURL_LOCATION", "Profil helye");
define("LAN_EURL_LOCATION_NONE", "A Config fájl nem elérhető");
define("LAN_EURL_FORM_HELP_DEFAULT", "Álnév az alapértelmezett nyelv esetén.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Alapértelmezett érték");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Álnév amikor");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Bázis URL");
define("LAN_EURL_ERR_ALIAS_MODULE", "Álnevet "%1\$s" nem lehet elmenteni - már van URL profil ezen a néven. Válassz másik álnevet a redszer URL profilhoz "%2\$s"");
define("LAN_EURL_SURL_UPD", "&nbsp; SEF URL frissítve!");
define("LAN_EURL_SURL_NUPD", "&nbsp; SEF URL nem lett frissítve!");
define("LAN_EURL_SETTINGS_PATHINFO", "Fájlnév törlése az URL-ből");
define("LAN_EURL_SETTINGS_MAINMODULE", "Root névtér társítása");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Válaszd ki, melyik oldal terület kapcsolódjon a Base URL-hez. Például: Mikor a News a root névtér akkor a http://yoursite.com/News-Item-Title lesz társítva a hírekhez (a hír oldalán kell megoldani)");
define("LAN_EURL_SETTINGS_REDIRECT", "Átirányítás a Nem található oldal-ak esetén");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Ha a false értéket váálasztod, a Nem található oldal-ak közvetlenül kerülnek rendelésre (anélkül hogy a böngésző átirányításra kerülne)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatikus SEF sztring létrehozás típusa");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Válaszd ki, hogyan állítsa össze a SEF sztring-et, amikor az automatikusan létrejön a Cím értékéből (pl.: hírekben, egyéni oldalakban, stb.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Csak biztosítsd");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "kötőjellel-elválasztva-kis-betűkkel");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Kötőjellel-Elválasztva-Nagy-Kezdőbetűkkel");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Kötőjellel-elválasztva-nem-módosítva-a-betűket");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "alsóvonással_elválasztva_kis_betűkkel");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Alsóvonással_Elválasztva_Nagy_Kezdőbetűkkel");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Alsóvonással_elválasztva_nem_módosítva_a_betűket");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "plusszal+elválasztva+kis+betűkkel");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plusszal+Elválasztva+Nagy+Kezdőbetűkkel");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plusszal+elválasztva+nem+módosítva+a+betűket");
define("LAN_EURL_MODREWR_DESCR", "Eltávolítja a fájl nevet (index.php/) az URL-ből. Telepítve kell lennie a mod_rewrite-nak és futnia kell a szerveren (Apache Web Server). Ennek a beállításnak az engedélyezése után lépj a oldal gyökér mappájába, nevezd át a htaccess.txt .htaccess-re és módosítsd <em>"RewriteBase"</em> irányelveket, ha szükséges.");
define("LAN_EURL_MENU", "URL-ek");
define("LAN_EURL_MENU_CONFIG", "URL Profilok");
define("LAN_EURL_MENU_ALIASES", "Álnevek");
define("LAN_EURL_MENU_SETTINGS", "Beállítások");
define("LAN_EURL_MENU_HELP", "Súgó");
define("LAN_EURL_MENU_REDIRECTS", "Átirányítások");
define("LAN_EURL_UC", "Karbantartás alatt");
define("LAN_EURL_CORE_MAIN", "Oldal Root Névtér - álnév nincs használatban.");
define("LAN_EURL_FRIENDLY", "Felhasználóbarát");
define("LAN_EURL_LEGACY", "Hagyományos URL-ek.");
define("LAN_EURL_REWRITE_LABEL", "Felhasználóbarát URL-ek");
define("LAN_EURL_REWRITE_DESCR", "Keresőmotor- és felhasználóbarát URL-ek.");
define("LAN_EURL_CORE_NEWS", "Hírek");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Teljes felhasználóbarát URL-ek (no performance and most friendly)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Felhasználóbarát URL-ek ID nélkül (no performance, more friendly)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Manuális link elemzés és összerakás.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Felhasználóbarát URL-ek ID-vel (performance wise)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Előre meghatározott szabályok alapján történő link elemzés és összerakás.");
define("LAN_EURL_CORE_USER", "Felhasználók");
define("LAN_EURL_USER_REWRITE_LABEL", "Felhasználóbarát URL-ek");
define("LAN_EURL_USER_REWRITE_DESCR", "Keresőmotor- és felhasználóbarát URL-ek.");
define("LAN_EURL_CORE_PAGE", "Egyéni oldalak");
define("LAN_EURL_PAGE_SEF_LABEL", "Felhasználóbarát URL-ek ID-vel (performance)");
define("LAN_EURL_PAGE_SEF_DESCR", "Keresőmotor- és felhasználóbarát URL-ek.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Felhasználóbarát URL-ek ID nélkül (no performance, more friendly)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Keresőmotor- és felhasználóbarát URL-ek.");
define("LAN_EURL_CORE_SEARCH", "Keresés");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Alapértelmezett Kereső URL");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Hagyományos URL.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Felhasználóbarát URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "Rendszer");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Alapértelmezett Rendszer URL-ek");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URL-ek az Oldal nem található, Hozzáférés letiltva, stb. oldalakhoz");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Felhasználóbarát Rendszer URL-ek");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URL-ek az Oldal nem található, Hozzáférés letiltva, stb. oldalakhoz");
define("LAN_EURL_CORE_INDEX", "Kezdőlap");
define("LAN_EURL_CORE_INDEX_INFO", "A kezdőlap nem rendelkezhet álnévvel.");
define("LAN_EURL_REBUILD", "Újraépítés");
?>
