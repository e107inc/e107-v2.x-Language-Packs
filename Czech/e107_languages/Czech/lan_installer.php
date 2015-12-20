<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Czech Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2015/12/20 19:53:15
|
|        $Author: Oxigen $
+---------------------------------------------------------------+
*/
define("LANINS_001", "e107 instalace");
define("LANINS_002", "Krok");
define("LANINS_003", "1");
define("LANINS_004", "Volba jazyka");
define("LANINS_005", "Zvolte jazyk, který má během instalace");
define("LANINS_007", "4");
define("LANINS_008", "PHP a MySQL verze Kontrola / Kontrola oprávnění souboru");
define("LANINS_009", "Překontrolovat oprávnění přístupu k souborům");
define("LANINS_010", "Do souboru nelze zapsat:");
define("LANINS_010a", "Do adresáře nelze zapsat:");
define("LANINS_012", "Nezdá se, že MySQL funkce existovat. To pravděpodobně znamená, že buď není nainstalována rozšíření PHP MySQL nebo instalace PHP nebyla kompilována s podporou MySQL.");
define("LANINS_013", "Nelze zjistit číslo verze své MySQL. Toto je nezávažná chyba, tak prosím pokračovat v instalaci, ale mějte na paměti, že e107 vyžaduje MySQL video = 3,23 správně fungovat.");
define("LANINS_014", "Oprávnění přístupu k souborům");
define("LANINS_015", "PHP Verze");
define("LANINS_017", "PASS");
define("LANINS_018", "Ujistěte se, že všechny soubory existují a mají nastaveno právo zápisu pro server. Běžně to znamená nastavení pomocí CHMOD na 777, ale záleží na prostředí. Pokud máte problémy, kontaktujte administrát");
define("LANINS_019", "Verzi PHP na serveru nainstalována není schopen spustit e107. e107, vyžaduje alespoň verzi PHP '. MIN_PHP_VERSION.'pracoval správně. Upgrade PHP verze nebo požádejte svého hostitele o inovaci.");
define("LANINS_021", "2");
define("LANINS_022", "Detaily MySQL Serveru");
define("LANINS_023", "Zadejte nastavení MySQL.

Pokud máte root oprávnění můžete vytvořit novou databázi zaškrtnutím políčka, je-li nesmíte vytvořit databázi nebo použít již existující.

Máte-li pouze jedna databáze používají předponu tak, aby ostatní skripty mohou sdílet stejnou databázi.
Pokud neznáte MySQL podrobnosti kontaktujte váš poskytovatel webhostingu.");
define("LANINS_024", "MySQL Server:");
define("LANINS_025", "MySQL Uživatelské jméno:");
define("LANINS_026", "MySQL Heslo:");
define("LANINS_027", "MySQL Databáze:");
define("LANINS_028", "Vytvořit Databázi?");
define("LANINS_029", "Prefix pro tabulky:");
define("LANINS_030", "MySQL server chcete e107 použít. Může také obsahovat číslo portu. např název_hostitele: 'Port' nebo cesty k místnímu zásuvka např \':/path/to/socket\' pro localhost.");
define("LANINS_031", "Uživatelské jméno chcete e107 použít pro připojení k MySQL serveru");
define("LANINS_032", "Heslo pro uživatele, které jste právě zadali. Nesmí obsahovat jednoduchých nebo dvojitých uvozovek.");
define("LANINS_033", "MySQL databáze, kterou chcete e107 pobývat, někdy označovány jako schéma. Musí začínat písmenem. Má-li uživatel databáze vytvořit oprávnění, které můžete zvolit vytvořit databázi automaticky, pokud dosud neexistuje.");
define("LANINS_034", "Prefix, který má e107 používat při tvorbě tabulek databáze. To je užitečné hlavně pro vícero instalací e107 v rámci jedné databáze.");
define("LANINS_036", "3");
define("LANINS_037", "Ověření spojení s MySQL");
define("LANINS_038", " a tvorba databáze");
define("LANINS_039", "Ujistěte se, že jste vyplnili všechny údaje. Nejdůležitější jsou: jméno MySQL serveru, uživatelské jméno MySQL a heslo, název databáze MySQL (tyto údaje server MySQL vždy vyžaduje)");
define("LANINS_040", "Chyby");
define("LANINS_041", "e107 se nepodařilo vytvořit připojení k serveru MySQL pomocí informací, které jste zadali. Návrat na poslední stránku a zajistí, že informace jsou správné.");
define("LANINS_042", "Spojení se serverem bylo navázáno a ověřeno.");
define("LANINS_043", "Nelze vytvořit databázi. Ujistěte se prosím, že máte korektně nastavená práva pro vytváření databáze na serveru MySQL.");
define("LANINS_044", "Databáze byla úspěšně vytvořena.");
define("LANINS_045", "Klikněte na další krok.");
define("LANINS_046", "5");
define("LANINS_047", "Detaily Administrátora");
define("LANINS_048", "");
define("LANINS_049", "Zadaná hesla nejsou stejné. Prosím vraťte se a opakujte akci.");
define("LANINS_050", "XML rozšíření");
define("LANINS_051", "nainstalováno");
define("LANINS_052", "nenainstalováno");
define("LANINS_053", "e107 v2.x vyžaduje instalaci rozšíření PHP XML. Obraťte se na svého hostitele nebo si přečtěte informace na [x] před pokračováním");
define("LANINS_054", "");
define("LANINS_055", "Potvrzení instalace");
define("LANINS_056", "6");
define("LANINS_057", "e107 má nyní veškeré informace potřebné k dokončení instalace.

Klikněte prosím na tlačítko k vytvoření databázových tabulek a zachránit všechna vaše nastavení.");
define("LANINS_058", "7");
define("LANINS_060", "Nelze číst sql datafile prosím zajistí souboru [b]core_sql.php[/b] v [b] / e107_core/sql [/ b] adresáři existuje.");
define("LANINS_061", "e107 se nepodařilo vytvořit všechny požadované databázové tabulky.
Vymazání databáze a vyřešení problémů před dalším pokusem.");
define("LANINS_069", "e107 byla úspěšně nainstalována.

Z bezpečnostních důvodů byste měli nyní nastavit oprávnění k souboru [b]e107_config.php[/b] souboru zpět na 644.

Rovněž Prosím odstraňte install.php ze serveru po klepnutí na tlačítko níže.");
define("LANINS_070", "e107 se nepodařilo uložit hlavní konfigurační soubor pro váš server.

Ověřte, zda že soubor [b]e107_config.php[/b] má správná oprávnění");
define("LANINS_071", "Instalace je dokončena");
define("LANINS_072", "Uživatelské jméno administrátora");
define("LANINS_073", "Toto je název, který budete používat k přihlášení do portálu. Pokud budete chtít použít jako zobrazované jméno také");
define("LANINS_074", "Jméno Administrátora pro zobrazení");
define("LANINS_076", "Heslo administrátora");
define("LANINS_077", "Sem zadejte heslo administrátora");
define("LANINS_078", "Potvrzení hesla administrátora");
define("LANINS_079", "Heslo administrátora vložte ještě jednou, pro potvrzení");
define("LANINS_080", "Admin Email");
define("LANINS_081", "Zadejte vaši e-mailovou adresu");
define("LANINS_083", "MySQL nahlásilo chybu:");
define("LANINS_084", "Instalátor nemůže navázat spojení s databází");
define("LANINS_085", "Instalátor nemůže vybrat databázi:");
define("LANINS_086", "[B] jsou uživatelské jméno správce, Admin heslo a Admin Email požadovaná pole [/ b]. Návrat na poslední stránku a zajistit, aby že údaje správně vloženy.");
define("LANINS_105", "Databáze jméno nebo předponu začátek nějaké číslicemi následované 'e' nebo 'E' není přijatelné");
define("LANINS_106", "Upozornění - e107 nemůže zapisovat do adresářů nebo souborů v seznamu. Sice to nezastaví, e107 instalace, bude to znamenat, že některé funkce nejsou k dispozici.
				Budete muset změnit oprávnění k použití těchto funkcí");
define("LANINS_107", "Název webové stránky");
define("LANINS_108", "Moje webové stránky");
define("LANINS_109", "Motiv webové stránky");
define("LANINS_111", "Zahrnout obsah/konfigurace");
define("LANINS_112", "Rychle reprodukovat vzhled náhledu motivu nebo demo. (Je-li k dispozici)");
define("LANINS_113", "Zadejte název webové stránky");
define("LANINS_114", "Zvolte prosím téma");
define("LANINS_115", "Název motivu");
define("LANINS_116", "Typ tématu");
define("LANINS_117", "Webové stránky předvolby");
define("LANINS_118", "Instalovat pluginy");
define("LANINS_119", "Nainstalujte všechny pluginy, které mohou vyžadovat téma.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php již obsahuje údaje");
define("LANINS_122", "Možná máte existující instalace");
define("LANINS_123", "Volitelně: Veřejné jméno nebo alias. Ponechte prázdné pro uživatelské jméno");
define("LANINS_124", "Zvolte heslo obsahující alespoň 8 znaků");
define("LANINS_125", "e107 byl úspěšně nainstalován.");
define("LANINS_126", "Z bezpečnostních důvodů byste měli nyní nastavit oprávnění k souboru e107_config.php souboru zpět na 644.");
define("LANINS_127", "Databáze [x] již existuje. Chcete jej přepsat? (všechna existující data budou ztracena)");
define("LANINS_128", "Přepsat");
define("LANINS_129", "Databáze nebyla nalezena.");


?>