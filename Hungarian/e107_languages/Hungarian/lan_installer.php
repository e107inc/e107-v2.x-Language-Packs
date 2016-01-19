<?php

// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

define("LANINS_001", "e107 telepítése");

define("LANINS_002", "Telepítés ");
define("LANINS_003", "1. lépés");
define("LANINS_004", "Nyelv kiválasztása");
define("LANINS_005", "Kiválasztott nyelv");
define("LANINS_007", "4. lépés");
define("LANINS_008", "PHP verzió, mySQL verzió / File Jogosultság Ellenörzés");
define("LANINS_009", "File Jogosultság Újraellenörzése");
define("LANINS_010", "Fájl nem írható: ");
define("LANINS_010a", "Mappa nem írható: ");
define("LANINS_012", "MySQL funkciók nem léteznek. Talán valamelyik MySQL PHP kiterjesztés nincs telepítve vagy nincs beállítva megfelelõen.");
define("LANINS_013", "Nem lehet megállapítani a MySQL verziószámát. Ez nem egy végzetes hiba, folytathatod a telepítést, de legyél figyelmes, mert az e107 működéséhez MySQL >= 3.23 vagy magasann szükséges a funkciók megfelelő működéséhez.");
define("LANINS_014", "Fájl Jogosultságok");
define("LANINS_015", "PHP Verzió");
define("LANINS_017", "Rendben");
define("LANINS_018", "Gondoskodj róla, hogy a felsorolt fájlok létezzenek és a szerver által írhatóak legyenek. Ez normális esetben CHMOD 777, de elõfordulhat más beállítás is - probléma esetén lépj kapcsolatba a kiszolgálóval.");
define("LANINS_019", "A szerveren telepített PHP verzió nem alkalmas az e107 futtatására. Az e107-hez szükséges minimum a ".MIN_PHP_VERSION." verzió a megfelelõ mûködéshez. Vagy frissítsd a PHP verziót, vagy lépj kapcsolatba a kiszolgálóval.");
define("LANINS_021", "2. lépés");
define("LANINS_022", "MySQL Szerver Adatok");
define("LANINS_023", "Írd be a MySQL beállításokat. Ha root jogosultsággal rendelkezel, akkor létre tudsz hozni új adatbázist a jelölõdoboz bejelölésével. Ha nem szükséges vagy már létezik, ne jelöld be. Ha csak egy adatbázissal rendelkezel, akkor használj egy prefix-et, így egyéb adatokat is menthetsz azonos adatbázisba. Ha nem ismered a MySQL adatokat, lépj kapcsolatba a szolgáltatóval.");
define("LANINS_024", "MySQL Szerver:");
define("LANINS_025", "MySQL Felhasználónév:");
define("LANINS_026", "MySQL Jelszó:");
define("LANINS_027", "MySQL Adatbázis:");
define("LANINS_028", "Létrehozol Adatbázist?");
define("LANINS_029", "Tábla prefix:");
define("LANINS_030", "A MySQL szerver, amit használni szeretnél az e107-hez. Belefoglalhatsz még egy port számot is. Pl.: “hostname:port” vagy egy útvonalat a helyi kapcsolathoz pl.: ':/path/to/socket' a localhost-hoz.");
define("LANINS_031", "A felhasználónév, mellyel kapcsolódik az e107 a MySQL szerverhez");
define("LANINS_032", "A felhasználó jelszava, amit éppen beírsz. Nem tartalmazhat idézőjelet.");
define("LANINS_033", "Az e107 MySQL adatbázisa, néha hivatkozik egy sémára. Ha a felhasználó rendelkezik adatbázis létrehozása jogosultsággal, akkor választható az adatbázis automatikus létrehozása, ha még nem létezik.");
define("LANINS_034", "A prefix (elõtag) az, amit az e107 használni fog, mikor létrehozza az adatbázis táblákat. Hasznos, ha összetett e107 telepítést kell végezni azonos adatbázisban.");
define("LANINS_036", "3. lépés");
define("LANINS_037", "MySQL Kapcsolat Ellenörzése");
define("LANINS_038", " és Adatbázis Létrehozása");
define("LANINS_039", "Természetesen, ki kell töltened az összes mezõt, nagyon fontos: MySQL Szerver, MySQL Felhasználónév és MySQL Adatbázis (Ezekre mindig szüksége van a MySQL Szervernek)");
define("LANINS_040", "Hibák");
define("LANINS_041", "e107 nem tud kapcsolódni a MySQL szerverhez a beírt adatokkal. Ellenőrizd az adatok helyességét!");
define("LANINS_042", "A MySQL szerverhez történõ kapcsolódás létrejött, ellenõzizve.");
define("LANINS_043", "Az adatbázis létrehozása sikertelen, ellenõzizd az adatbázis létrehozásához szükséges jogosultságokat a szerveren.");
define("LANINS_044", "Adatbázis sikeresen létrejött.");
define("LANINS_045", "Katt a gombra a folyamat folytatásához.");
define("LANINS_046", "5. lépés");
define("LANINS_047", "Adminisztrátor adatai");
define("LANINS_049", "A két, általad beírt jelszó nem azonos. Lépj vissza és próbáld újra.");
define("LANINS_050", "XML Kiterjesztés");
define("LANINS_051", "Telepítve");
define("LANINS_052", "Nincs telepítve");
define("LANINS_053", "e107 v2.x-hez szükséges a PHP XML kiterjesztés telepítése. Lépj kapcsolatba a kiszolgálóval vagy oldasd el az errõl szóló információkat [x] mielőtt folytatod");
define("LANINS_055", "Telepítés megerősítése");
define("LANINS_056", "6. lépés");
define("LANINS_057", " Az e107 rendelkezik a telepítéshez szükséges összes információval. Katt a gombra az adatbázis táblák létrehozásához és a beállítások mentéséhez.");
define("LANINS_058", "7. lépés");
define("LANINS_060", "Az SQL file olvasása sikertelen. Ellenõrizd a [b]core_sql.php[/b] fájl létezését az [b]/e107_core/sql[/b] könyvtárban.");
define("LANINS_061", "Az e107 nem tudta létrehozni az összes, szükséges adatbázis táblát. Töröld az adatbázist, az ismételt telepítés elõtt javítani kell a problémát.");

define("LANINS_069", "Az e107 telepítése sikeres! A biztonságos működés érdekében állítsd az [b]e107_config.php[/b] file jogosultságát 644-re. Ne feledkezz meg az install.php törléséről a szerverről a lenti gomb megnyomása után.");
define("LANINS_070", "Az e107 nem tudja elmenteni a konfigurációs file-t a szerverre. Ellenőrizd, hogy az [b]e107_config.php[/b] fájl a megfelelő jogosultsággal rendelkezik-e");
define("LANINS_071", "Telepítés befejezése");

define("LANINS_072", "Admin Felhasználónév");
define("LANINS_073", "Ezt a felhasználónevet kell használnod az oldalra történő bejelentkezéskor. Ha akarod, ezt is használhatod megjelenő névként is");
define("LANINS_074", "Admin Megjelenő név");
define("LANINS_076", "Admin Jelszó");
define("LANINS_077", "Írd be az általad használni kívánt jelszót");
define("LANINS_078", "Admin Jelszó megerősítése");
define("LANINS_079", "Írd be újra a jelszót");
define("LANINS_080", "Admin email");
define("LANINS_081", "Írd be az e-mail címedet");

define("LANINS_083", "MySQL Jelentett hiba:");
define("LANINS_084", "A telepítõ nem tud kapcsolódni az adatbázishoz");
define("LANINS_085", "A telepítõ nem tudja kiválasztani az adatbázist:");

define("LANINS_086", "Admin Felhasználónév, Admin Jelszó és Admin Email mezőket [b]kötelező[/b] kitölteni! Írd be a megfelelõ információkat.");

define("LANINS_105", "Az adatbázisnév vagy a prefix elején a következő jegyek 'e' vagy 'E' nem elfogadhatóak.");
define("LANINS_106", "FIGYELMEZTETÉS - E107 nem tud hozzáírni a kilistázott könyvtárakhoz és/vagy file-khez. Mivel ez nem állítja le a telepítést, de bizonyos funkciók, tulajdonságok nem lesznek engedélyezve. Ezen tulajdonságok használatához meg kell változtatni a file jogosultságokat.");

define("LANINS_107", "Weboldal neve");
define("LANINS_108", "Az Én weboldalam");
define("LANINS_109", "Weboldal sminkje");
define("LANINS_111", "Tartalom/beállítások felvétele");
define("LANINS_112", "A sminkek előnézeteinek vagy bemutatójainak gyors előállítása. (ha negedélyezett)");
define("LANINS_113", "Írd be a weboldal nevét");
define("LANINS_114", "Válassz egy sminket");
define("LANINS_115", "Smink neve");
define("LANINS_116", "Smink típusa");
define("LANINS_117", "Weboldal Beállítások");
define("LANINS_118", "Bővítmények telepítése");
define("LANINS_119", "A sminkhez szükséges összes bővítmény telepítése.");
define("LANINS_120", "8. lépés");
define("LANINS_121", "e107_config.php fájl nem üres");
define("LANINS_122", "Lehet, hogy már telepítetted a rendszert");
define("LANINS_123", "Opcionális: Publikus neved vagy az alias. Hagyd üresen a felhasználónév használatához");
define("LANINS_124", "Válassz egy jelszót legalább 8 karakter hosszúsággal");
define("LANINS_125", "e107 sikeresen telepítve!");
define("LANINS_126", "A biztonságra tekintettel ne feledd az e107_config.php fájl jogosultságát visszaállítani 644-re.");
define("LANINS_127", "Az adatbázis [x] már létezik. Felülírod? (az összes adat el fog veszni)");
define("LANINS_128", "Felülírás");
define("LANINS_129", "Az Adatbázis nem található.");
