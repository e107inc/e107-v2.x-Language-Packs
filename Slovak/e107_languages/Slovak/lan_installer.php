<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Slovak Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2015/12/09 18:22:21
|
|        $Author: Jimako $
+---------------------------------------------------------------+
*/
define("LANINS_001", "Inštalácia e107");
define("LANINS_002", "Krok č.");
define("LANINS_003", "1");
define("LANINS_004", "Výber jazyka");
define("LANINS_005", "Zvoľte jazyk, v ktorom chcete e107 nainštalovať");
define("LANINS_007", "4");
define("LANINS_008", "Kontrola PHP a MySQL verzia / Kontrola práv k súborom");
define("LANINS_009", "Opätovne skontrolovať práva k súborom");
define("LANINS_010", "Súbor nie je prístupný pre zápis:");
define("LANINS_010a", "Adresár nie je prístupný pre zápis:");
define("LANINS_012", "Zdá sa, že neexistujú MySQL funkcie. Pravdepodobne to znamená, že nie je buď prístupné MySQL PHP rozšírenie alebo inštalácia vášho PHP nebola skompilovaná s podporou MySQL.");
define("LANINS_013", "Nepodarilo sa určiť verziu MySQL. Nie je to fatálna chyba, takže pokračujte v inštalácii, ale buďte si vedomí, že pre svoje správne fungovanie e107 vyžaduje MySQL > 3.23");
define("LANINS_014", "Oprávnenia prístupu k súborom");
define("LANINS_015", "PHP verzia");
define("LANINS_017", "OK");
define("LANINS_018", "Uistite sa, že všetky súbory v zozname existujú a majú nastavené právo zápisu pre server.  Toto normálne vyžaduje nastaviť ich CHMOD na 777, ale záleží na prostredí. Pokiaľ máte problémy, kontaktujte administrátora svojho hostingu.");
define("LANINS_019", "Verzia PHP na vašom serveri neumožňuje fungovanie e107. e107 vyžaduje minimálne  ".MIN_PHP_VERSION." , aby fungovala správne. Buď upgradujte PHP verziu alebo kvôli upgradu kontaktujte svoj hosting.");
define("LANINS_021", "2");
define("LANINS_022", "Detaily MySQL Servera");
define("LANINS_023", "Sem zadajte nastavenia MySQL. Ak máte root oprávnenia, môžete vytvoriť novú databázu zaškrtnutím tohto boxu, ak nie, musíte najprv databázy vytvoriť alebo použiť už existujúcu. Ak máte k dispozícii len jednu databázu, využite iný prefux, aby tú istú databázu mohlo zdieľať viacej skriptov. Ak neviete nastaviť prístup k databáze, kontaktujte svoj hosting.");
define("LANINS_024", "MySQL server:");
define("LANINS_025", "MySQL používateľ:");
define("LANINS_026", "MySQL heslo:");
define("LANINS_027", "MySQL databáza:");
define("LANINS_028", "Vytvoriť databázu?");
define("LANINS_029", "Prefix tabuliek:");
define("LANINS_030", "MySQL server, na ktorom chcete použiť e107 Môže tiež zahŕňať číslo portu, napr. 'hostname:port' alebo cestu k lokálnemu socketu napr. \":/path/to/socket\" pre localhost.");
define("LANINS_031", "Používateľské meno, ktoré má e107 použiť na pripojenie sa k MySQL serveru");
define("LANINS_032", "Heslo pre používateľa, ktorého ste práve zadali. Nesmie obsahovať jednoduché ani dvojité uvodzovky.");
define("LANINS_033", "MySQL databáza, ktorú chcete použiť pre e107, občas označovaná ako schéma. Musí začínať písmenom. Ak má používateľ práva na vytvorenie, môže zvoliť automatické vytvorenie databázy, ak už databáza neexistuje.");
define("LANINS_034", "Predpona, ktorú e107 použije pri vytváraní e107 tabuliek. Vhodné pri viacnásobných inštaláciách e107 v jednej databáze.");
define("LANINS_036", "3");
define("LANINS_037", "Overenie spojenia s MySQL");
define("LANINS_038", " a vytvorenie databázy");
define("LANINS_039", "Uistite sa, že vyplníte všetky polia, hlavne MySQL server, MySQLpoužívateľ  a MySQL databáza (Tieto MySQL server požaduje vždy)");
define("LANINS_040", "Chyby");
define("LANINS_041", "e107 sa nepodarilo pripojiť k MySQL serveru za použitia informácii, ktoré ste zadali. Vráťte sa na predchádzajúcu stranu a uistite sa, či sú informácie správne.");
define("LANINS_042", "Spojenie s MySQL serverom je vytvorené a overené.");
define("LANINS_043", "Databázu nie je možné vytvoriť, uistite sa, že máte oprávnenie vytvárať  na vašom serveri databázy.");
define("LANINS_044", "Databáza bola úspešne vytvorená.");
define("LANINS_045", "Kliknite na tlačidlo, aby ste pokračovali do ďalšieho kroku.");
define("LANINS_046", "5");
define("LANINS_047", "Detaily administrátora");
define("LANINS_048", "EXIF rozšírenie");
define("LANINS_049", "Nezadali ste rovnaké heslá. Vráťte sa a skúste to znova.");
define("LANINS_050", "XML rozšírenie");
define("LANINS_051", "Nainštalované");
define("LANINS_052", "Nenainštalované");
define("LANINS_055", "Potvrdenie inštalácie");
define("LANINS_056", "6");
define("LANINS_057", "e107 má teraz všetky informácie, ktoré potrebuje, aby dokončila inštaláciu. Kliknite na tlačidlo, aby ste vytvorili databázové tabuľky a uložili svoje nastavenia.");
define("LANINS_058", "7");
define("LANINS_060", "Nie je možné prečítať súbor sql. Uistite sa, že súbor [b]core_sql.php[/b] v adresári  [b]/e107_core/sql[/b] existuje.");
define("LANINS_061", "e107 nedokázala vytvoriť všetky požadované databázové tabuľky. Vyčistite databázu a opravte všetky problémy, než to skúsite znova.");
define("LANINS_069", "e107 sa úspešne nainštalovala! Z bezpečnostných dôvodov by ste mali nastaviť práva na súbore [b]e107_config.php[/b] späť na 644. Tiež po tom, čo kliknite na tlačidlo nižšie, vymažte zo servera súbor install.php");
define("LANINS_070", "e107 nedokázala uložiť hlavný konfiguračný súbor na váš server. Uistite sa, že súbor  [b]e107_config.php[/b]  má správne oprávnenia.");
define("LANINS_071", "Inštalácia dokončená");
define("LANINS_072", "Používateľské meno administrátora");
define("LANINS_073", "Toto meno použijete na prihlásenie sa do stránky. Ak chcete, môžete ho použiť aj ako meno, ktoré sa zobrazuje");
define("LANINS_074", "Zobrazované meno administrátora");
define("LANINS_076", "Heslo administrátora");
define("LANINS_077", "Sem zadajte heslo administrátora");
define("LANINS_078", "Potvrdenie hesla administrátora");
define("LANINS_079", "Pre potvrdenie znovu vložte heslo administrátora");
define("LANINS_080", "Email administrátora");
define("LANINS_081", "Zadajte svoju emailovú adresu");
define("LANINS_083", "MySQL hlásené chyby:");
define("LANINS_084", "Inštalačná aplikácia nemôže nadviazať spojenie s databázou");
define("LANINS_085", "Inštalačná aplikácia nemôže vybrať databázu:");
define("LANINS_086", "Používateľské meno administrátora, jeho heslo a email sú vyžadované polia. Vráťte sa na predchádzajúcu stranu a overte si, či ste zadali správne informácie.");
define("LANINS_105", "Meno databázy alebo predpona začínajúca číslami, ktoré sú nasledované  'e' or 'E'  nie sú povolené");
define("LANINS_106", "VAROVANIE - e107 nedokáže zapisovať do adresárov a/alebo súborov vymenovaných nižšie. Hoci to inštaláciu e107 nezastaví, bude to znamenať, že niektoré funkcie nebudú dostupné. Na ich použitie musíte zmeniť práva k súborom.");
define("LANINS_107", "Názov webovej stránky");
define("LANINS_108", "Moja webová stránka");
define("LANINS_109", "Téma (Vzhľad) stránky");
define("LANINS_111", "Zahrnúť Obsah/Nastavenia");
define("LANINS_112", "Rýchlo poskytne náhľad témy alebo demo (ak je dostupné)");
define("LANINS_113", "Zadajte meno stránky");
define("LANINS_114", "Zvoľte tému");
define("LANINS_115", "Názov témy");
define("LANINS_116", "Typ témy");
define("LANINS_117", "Nastavenia webstránky ");
define("LANINS_118", "Nainštalovať pluginy");
define("LANINS_119", "Nainštalovať všetky pluginy, ktoré téma vyžaduje");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php už obsahuje údaje");
define("LANINS_122", "Asi už máte niečo nainštalované");
define("LANINS_123", "Voliteľné: Vaše verejné meno alebo alias. Nechajte prázdne, ak chcete použiť používateľské meno");
define("LANINS_124", "Zvoľte heslo o minimálnej dĺžke 8 znakov");
define("LANINS_125", "e107 bola úspešne nainštalovaná!");
define("LANINS_126", "Z bezpečnostných dôvodov by ste mali nastaviť práva k e107_config.php späť na 644.");
define("LANINS_127", "Databáza [x] už existuje. Prepísať? (všetky existujúce dáta budú stratené)");
define("LANINS_128", "Prepísať");
define("LANINS_129", "Databáza nenájdená.");
define("LANINS_134", "Inštalácia");
define("LANINS_135", "z");
define("LANINS_136", "Vymazaná existujúca databáza");
define("LANINS_137", "Nájdená existujúca databáza");
define("LANINS_141", "Sem zadajte nastavenia MySQL. Ak neviete nastaviť prístup k databáze, kontaktujte svoj hosting. Nad každým poľom sa po nastavení myšou zobrazia dodatočné informácie.");
define("LANINS_142", "DÔLEŽITÉ: Premenujte e107.htaccess na .htaccess");
define("LANINS_144", "DÔLEŽITÉ: Skopírujte obsah súboru [b]e107.htaccess[/b] do vášho [b].htaccess[/b] file. Uistite sa, že NEPREPÍŠETE žiadne údaje, ktoré by v ňom mohli byť.");
define("LANINS_145", "e107 v2.x vyžaduje naištalované PHP [x] . Kontaktujte svoj hosting alebo si prečítajte informácie na [y] než budete pokračovať.");


?>