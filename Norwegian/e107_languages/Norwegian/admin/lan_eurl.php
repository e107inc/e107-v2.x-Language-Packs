<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Norwegian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2015/12/28 20:15:20
|
|        $Author: Administrador $
+---------------------------------------------------------------+
*/

define("LAN_EURL_NAME", "Administrere webadresser");
define("LAN_EURL_NAME_CONFIG", "Profiler");
define("LAN_EURL_NAME_ALIASES", "Aliaser");
define("LAN_EURL_NAME_SETTINGS", "Generelle innstillinger");
define("LAN_EURL_NAME_HELP", "Hjelp");
define("LAN_EURL_EMPTY", "Listen er tom");
define("LAN_EURL_LEGEND_CONFIG", "Velg URL-profil per område");
define("LAN_EURL_LEGEND_ALIASES", "Konfigurere Base URL aliaser per URL profil");
define("LAN_EURL_DEFAULT", "standard");
define("LAN_EURL_PROFILE", "Profil");
define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Profil info ikke tilgjengelig");
define("LAN_EURL_LOCATION", "Profilplassering");
define("LAN_EURL_LOCATION_NONE", "Konfigurasjonsfilen er ikke tilgjengelig");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias i standardspråket.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Standardverdien er");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias i");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Basiswebadressen");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias '%1\$s' kan ikke lagres - det er en system URL profil med samme navn. Velg en annen alias verdi for Systemprofil URL '%2\$s'");
define("LAN_EURL_SETTINGS_PATHINFO", "Fjerne filnavnet i URLen");
define("LAN_EURL_SETTINGS_MAINMODULE", "Knytte rotnavneområdet");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Velg hvilket område vil bli koblet med base Webadressen. Eksempel: Når nyheten er din rot-navneområdet http://yoursite.com/News-Item-Title knyttes nyheter (elementer visningsside blir løst)");
define("LAN_EURL_SETTINGS_REDIRECT", "Omadressere til systemet finner ikke siden");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Hvis satt til USANN, ikke funnet siden vil bli direkte gjengis (uten leseren viderekobling)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatisert SEF strengtype etableringen");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Velg hvordan blir samlet SEF streng når det bygges automatisk fra en tittel verdi (f.eks. i nyheter, tilpassede sider, etc.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Rettferdig sikre det");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize-til-små");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize-til-kamelen-saken");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize-med-no-sak-endring");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore_to_lower_case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_To_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "Plus + skilletegn + til + lavere + case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus + skilletegn + til + Camel + Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus + skilletegn + med ingen + case + endre");
define("LAN_EURL_MODREWR_DESCR", "Fjerner oppføringsnavnet på skriptfilen (index.php/) fra nettadressen. Du må mod_rewrite installert og kjører på serveren (Apache Web Server). Etter aktivering av denne innstillingen gå til ditt nettsted rotmappe, gi htaccess.txt .htaccess og modifgy <em>'RewriteBase'</em> direktivet om nødvendig.");
define("LAN_EURL_MENU", "Webadresser");
define("LAN_EURL_MENU_CONFIG", "URL profiler");
define("LAN_EURL_MENU_ALIASES", "Aliaser");
define("LAN_EURL_MENU_SETTINGS", "Innstillinger");
define("LAN_EURL_MENU_HELP", "Hjelp");
define("LAN_EURL_MENU_REDIRECTS", "Omadresserer");
define("LAN_EURL_UC", "Under bygging");
define("LAN_EURL_CORE_MAIN", "Nettstedet rot Namespace - alias ikke er i bruk.");
define("LAN_EURL_FRIENDLY", "Vennlig");
define("LAN_EURL_LEGACY", "Eldre direkte nettadresser.");
define("LAN_EURL_REWRITE_LABEL", "Adresser");
define("LAN_EURL_REWRITE_DESCR", "Søk motor og bruker vennlig webadresser.");
define("LAN_EURL_CORE_NEWS", "Nyheter");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Full adresser (ingen ytelse og mest friendly)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Adresser uten ID (ingen ytelse, mer vennlig)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Viser manuell link analyse og montering.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Adresser med ID (ytelse klok)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Viser automatisk kobling analyse og montering basert på forhåndsdefinerte rute regler.");
define("LAN_EURL_CORE_USER", "brukere");
define("LAN_EURL_USER_REWRITE_LABEL", "Adresser");
define("LAN_EURL_USER_REWRITE_DESCR", "Søk motor og bruker vennlig webadresser.");
define("LAN_EURL_CORE_PAGE", "Egne sider");
define("LAN_EURL_PAGE_SEF_LABEL", "Adresser med ID (ytelse)");
define("LAN_EURL_PAGE_SEF_DESCR", "Søk motor og bruker vennlig webadresser.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Adresser uten ID (ingen ytelse, mer vennlig)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Søk motor og bruker vennlig webadresser.");
define("LAN_EURL_CORE_SEARCH", "Søk");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Standard søke-URL");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Eldre direkte URL.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Vennlig URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "Systemet");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Standard System nettadresser");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "Nettadresser for sider som ikke finnes, tilgang, etc.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Brukervennlig System nettadresser");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "Nettadresser for sider som ikke finnes, tilgang, etc.");
define("LAN_EURL_CORE_INDEX", "Forsiden");
define("LAN_EURL_CORE_INDEX_INFO", "Foran siden kan ikke ha et alias.");


?>