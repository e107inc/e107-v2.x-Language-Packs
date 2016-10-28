<?php

/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Dutch Language File.
|
|     $URL:$
|     $Revision:$
|     $Date:$
|     $Author: Yvalni, Tgtje $
+----------------------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Beheer Site URLs");
define("LAN_EURL_NAME_CONFIG", "Profielen");
define("LAN_EURL_NAME_ALIASES", "Aliassen");
define("LAN_EURL_NAME_SETTINGS", "Algemene instellingen");
define("LAN_EURL_NAME_HELP", "Help");
define("LAN_EURL_EMPTY", "De lijst is leeg");
define("LAN_EURL_LEGEND_CONFIG", "Kies URL profiel per site gebied");
define("LAN_EURL_LEGEND_ALIASES", "Configureer Basis URL aliasen per URL profiel");
define("LAN_EURL_DEFAULT", "Default");
define("LAN_EURL_PROFILE", "Profiel");
define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Profiel info niet beschikbaar");
define("LAN_EURL_LOCATION", "Profiel Locatie");
define("LAN_EURL_LOCATION_NONE", "Configuratie bestand niet beschikbaar");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias wanneer standaard taal");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Standaard waarde is");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias wanneer in");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Basis URL");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias '%1\$s' kan niet bewaard worden - er bestaat een systeem URL met een gelijke naam. Kies een andere alias waarde voor systeem URL profiel '%2\$s'");
define("LAN_EURL_SURL_UPD", "  SEF URLs werden geupdated.");
define("LAN_EURL_SURL_NUPD", "  SEF URLs werden NIET geupdated.");
define("LAN_EURL_SETTINGS_PATHINFO", "Verwijder bestandsnaam van de URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Associëren Root naamruimte");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Kies welk site deel zal worden geschakeld met je standaard site URL. Voorbeeld : wanneer Nieuws jouw basis naamsruimte is zal http://yoursite.com/Nieuws-Item-Titel worden geassocieërd met nieuws (itemweergave pagina zal worden opgelost)");
define("LAN_EURL_SETTINGS_REDIRECT", "Leid om naar systeem niet gevonden pagina");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Wanneer ingesteld op false, zal de niet gevonden pagina direct worden getoond (zonder browser omleiding)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Geautomatiseerde SEF tekenreeks aanmaak type");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Kies hoe de SEF tekenreeks wordt samengesteld wanneer automatisch is opgebouwd uit een Titel waarde (vb. in nieuws, maatwerk pagina's, enz.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Gewoon beveiligen maar");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize-to-lower-case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize-To-Camel-Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize-with-no-case-CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore naar kleine lettertype");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_To_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "plus+separator+to+lower+case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus+Separator+To+Camel+Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus+separator+with+no+case+CHANGE");
define("LAN_EURL_MODREWR_DESCR", "Verwijdert ingaande script bestandsnaam (index.php /) van uw URL's. U zult mod_rewrite moeten hebben geïnstalleerd, en werkend op uw server (Apache Web Server). Na het inschakelen van deze instelling ga naar uw site hoofdmap, hernoem htaccess.txt naar .htaccess en modificeer de <em>'RewriteBase' </ em> richtlijn indien nodig.");
define("LAN_EURL_MENU", "Site URL's");
define("LAN_EURL_MENU_CONFIG", "URL profielen");
define("LAN_EURL_MENU_ALIASES", "Aliassen");
define("LAN_EURL_MENU_SETTINGS", "Instellingen");
define("LAN_EURL_MENU_HELP", "Help");
define("LAN_EURL_MENU_PROFILES", "Profielen");
define("LAN_EURL_UC", "In voorbereiding");
define("LAN_EURL_CORE_MAIN", "Naamsruimte Site oorsprong - alias niet in gebruik");
define("LAN_EURL_FRIENDLY", "Vriendelijk");
define("LAN_EURL_LEGACY", "Oudere  directe URL");
define("LAN_EURL_REWRITE_LABEL", "Vriendelijke URLs");
define("LAN_EURL_REWRITE_DESCR", "Zoekmachine en gebruikersvriendelijke URLs.");
define("LAN_EURL_CORE_NEWS", "Nieuws");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Volledige vriendelijke URLs (geen prestatie, meer vriendelijk)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "Zoek machine en gebruikersvriendelijke URLs");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Vriendelijke URLs zonder ID (geen prestatie, meer vriendelijk)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstreert handmatige link ontleding en samenstelling.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Vriendelijke URLs met ID (prestatie gericht)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstreert geautomatiseerde link ontleding en samenstelling op basis van vooraf bepaalde route regels.");
define("LAN_EURL_CORE_USER", "Gebruikers");
define("LAN_EURL_USER_REWRITE_LABEL", "Vriendelijke URLs");
define("LAN_EURL_USER_REWRITE_DESCR", "Zoekmachine en gebruikersvriendelijke URLs.");
define("LAN_EURL_CORE_PAGE", "Maatwerk Paginas");
define("LAN_EURL_PAGE_SEF_LABEL", "Vriendelijke URLs met ID (presterend)");
define("LAN_EURL_PAGE_SEF_DESCR", "Zoekmachine en gebruikersvriendelijke URLs.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Vriendelijke URLs zonder ID (geen prestatie, meer vriendelijk)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Zoekmachine en gebruikersvriendelijke URLs.");
define("LAN_EURL_CORE_SEARCH", "Zoeken");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Standaard zoek URL");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Oudere  directe URL");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Vriendelijke URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "Zoek machine en gebruikers vriendelijke URLs");
define("LAN_EURL_CORE_SYSTEM", "Systeem");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Standaard systeem URLs");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URLs voor pagina zoals Niet gevonden, Toegang geweigerd, enz.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Systeem vriendelijke URLs");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URLs voor pagina zoals Niet gevonden, Toegang geweigerd, enz.");
define("LAN_EURL_CORE_INDEX", "Voorpagina");
define("LAN_EURL_CORE_INDEX_INFO", "Voorpagina kan geen alias hebben");
define("LAN_EURL_REBUILD", "Herbouwen");
 
?>