<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Czech Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2015/12/20 20:00:28
|
|        $Author: Oxigen $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Spravovat adresy URL webu");
define("LAN_EURL_NAME_CONFIG", "Profily");
define("LAN_EURL_NAME_ALIASES", "Aliasy");
define("LAN_EURL_NAME_SETTINGS", "Hlavní nastavení");
define("LAN_EURL_NAME_HELP", "Nápověda");
define("LAN_EURL_EMPTY", "Seznam je prázdný");
define("LAN_EURL_LEGEND_CONFIG", "Vybrat adresu URL profilu na webu plochy");
define("LAN_EURL_LEGEND_ALIASES", "Konfigurovat základní adresa URL aliasy na URL profilu");
define("LAN_EURL_DEFAULT", "standardní");
define("LAN_EURL_PROFILE", "Profil");
define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Informace o profilu není k dispozici.");
define("LAN_EURL_LOCATION", "Umístění profilu");
define("LAN_EURL_LOCATION_NONE", "Konfigurační soubor není k dispozici.");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias ve výchozím jazyce.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Výchozí hodnota je");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias v");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Základní adresa URL");
define("LAN_EURL_ERR_ALIAS_MODULE", "Nelze uložit alias '%1\$s' - je profil URL systému se stejným názvem. Prosím zvolte jinou hodnotu alias pro profil URL systému '%2\$s'");
define("LAN_EURL_SETTINGS_PATHINFO", "Odebrání souboru z adresy URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Přiřazení názvů Root");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Zvolte, které oblasti stránek bude spojeno s vaší základní stránky URL. Příklad: Když se zprávou je váš kořenový obor názvů http://yoursite.com/News-Item-Title bude spojena s novinkami (položka zobrazit stránku bude vyřešen)");
define("LAN_EURL_SETTINGS_REDIRECT", "Přesměrování na systém nebyl nalezen stránky");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Je-li nastavena na hodnotu false, Nenalezeno stránky bude přímo vykreslena (bez přesměrování prohlížeče)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatické vytvoření typ string SEF");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Vyberte si jak bude sestaven SEF řetězec, když je automaticky sestaven z názvu hodnoty (např. v Novinky, vlastní stránky, atd.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Stačí zajistit");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize na--malá");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize na Camel-Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize s ne case změna");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore_to_lower_case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_To_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "Plus + oddělovač + do + nižší + případ");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus + oddělovač + do + velbloud + Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus + oddělovač + s + žádný + pouzdro + změny");
define("LAN_EURL_MODREWR_DESCR", "Odstraní položku název souboru skriptu (index.php/) z adresy URL. Budete potřebovat mod_rewrite nainstalován a běží na vašem serveru (Apache Web Server). Po povolení tohoto nastavení přejděte do kořenové složky webu, přejmenovat htaccess.txt .htaccess a modifgy <em>'RewriteBase'</em> směrnice, v případě potřeby.");
define("LAN_EURL_MENU", "Adresy URL webu");
define("LAN_EURL_MENU_CONFIG", "Adresa URL profily");
define("LAN_EURL_MENU_ALIASES", "Aliasy");
define("LAN_EURL_MENU_SETTINGS", "Nastavení");
define("LAN_EURL_MENU_HELP", "Nápověda");
define("LAN_EURL_MENU_REDIRECTS", "Přesměrování");
define("LAN_EURL_UC", "Ve výstavbě");
define("LAN_EURL_CORE_MAIN", "Stránky Root Namespace - alias není v provozu.");
define("LAN_EURL_FRIENDLY", "Přátelský");
define("LAN_EURL_LEGACY", "Starší verze přímé adresy URL.");
define("LAN_EURL_REWRITE_LABEL", "Friendly URL");
define("LAN_EURL_REWRITE_DESCR", "Vyhledávací engine a uživateli friendly URL.");
define("LAN_EURL_CORE_NEWS", "nové");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Plný přátelské URL (žádný výkon a většina přátelské)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Friendly URL bez ID (žádný výkon, více přátelské)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Znázorňuje ruční propojení analýzy a kompletace.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Friendly URL s identifikátorem (výkonu)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Ukazuje, že automatizované propojení analýzy a kompletace na základě předdefinované trasy pravidel.");
define("LAN_EURL_CORE_USER", "uživatelé");
define("LAN_EURL_USER_REWRITE_LABEL", "Friendly URL");
define("LAN_EURL_USER_REWRITE_DESCR", "Vyhledávací engine a uživateli friendly URL.");
define("LAN_EURL_CORE_PAGE", "Vlastní stránky");
define("LAN_EURL_PAGE_SEF_LABEL", "Friendly URL s identifikátorem (výkon)");
define("LAN_EURL_PAGE_SEF_DESCR", "Vyhledávací engine a uživateli friendly URL.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Friendly URL bez ID (žádný výkon, více přátelské)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Vyhledávací engine a uživateli friendly URL.");
define("LAN_EURL_CORE_SEARCH", "hledat");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Výchozí adresa URL hledání");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Starší verze přímé URL.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Přátelské URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "Systém");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Výchozí systém adresy URL");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "Adresy URL pro stránky jako nebyl nalezen, přístup byl odepřen, atd.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Adresy URL přátelské systému");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "Adresy URL pro stránky jako nebyl nalezen, přístup byl odepřen, atd.");
define("LAN_EURL_CORE_INDEX", "Hlavní strana");
define("LAN_EURL_CORE_INDEX_INFO", "Titulní stránka nemůže mít alias.");


?>