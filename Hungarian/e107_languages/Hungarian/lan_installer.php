<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/02/22 13:26:40
|
|        $Author: Yesszus $
+---------------------------------------------------------------+
*/
define("LANINS_001", "Az e107 telepítése");
define("LANINS_002", "Telepítés");
define("LANINS_003", "1. lépés");
define("LANINS_004", "Nyelv kiválasztása");
define("LANINS_005", "Kiválasztott nyelv");
define("LANINS_007", "4. lépés");
define("LANINS_008", "PHP verzió, mySQL verzió / Fájl Jogosultság Ellenőrzés");
define("LANINS_009", "Fájl Jogosultság Újraellenőrzése");
define("LANINS_010", "A fájl nem írható:");
define("LANINS_010a", "A mappa nem írható:");
define("LANINS_012", "A MySQL funkciók nem léteznek. Talán valamelyik MySQL PHP kiterjesztés nincs telepítve vagy nincs megfelelően beállítva.");
define("LANINS_013", "Nem lehet megállapítani a MySQL verziószámát. Ez nem egy végzetes hiba, folytathatod a telepítést, de legyél figyelmes, mert az e107 működéséhez MySQL >= 3.23 vagy magasabb szükséges a funkciók megfelelő működéséhez.");
define("LANINS_014", "Fájl Jogosultságok");
define("LANINS_015", "PHP Verzió");
define("LANINS_017", "Rendben");
define("LANINS_018", "Gondoskodj róla, hogy a felsorolt fájlok létezzenek és a szerver által írhatóak legyenek. Ez normális esetben CHMOD 777, de előfordulhat más beállítás is - probléma esetén lépj kapcsolatba a kiszolgálóval.");
define("LANINS_019", "A szerveren telepített PHP verzió nem alkalmas az e107 futtatására. Az e107-hez szükséges minimum a ".MIN_PHP_VERSION." verzió a megfelelő működéshez. Vagy frissítsd a PHP verziót, vagy lépj kapcsolatba a kiszolgálóval.");
define("LANINS_021", "2. lépés");
define("LANINS_022", "MySQL Szerver Adatok");
define("LANINS_023", "Add meg a MySQL adatokat. Ha root jogosultsággal rendelkezel, akkor létre tudsz hozni új adatbázist a jelölődoboz bejelölésével. Ha nem szükséges vagy már létezik, ne jelöld be. Ha csak egy adatbázissal rendelkezel, akkor használj egy prefix-et, így egyéb adatokat is menthetsz azonos adatbázisba. Ha nem ismered a MySQL adatokat, lépj kapcsolatba a szolgáltatóval.");
define("LANINS_024", "MySQL Szerver:");
define("LANINS_025", "MySQL Felhasználónév:");
define("LANINS_026", "MySQL Jelszó:");
define("LANINS_027", "MySQL Adatbázis:");
define("LANINS_028", "Létrehozod az adatbázist?");
define("LANINS_029", "Tábla prefix:");
define("LANINS_030", "A MySQL szerver, amit használni szeretnél az e107-hez. Belefoglalhatsz még egy port számot is. Pl.: “hostname:port” vagy egy útvonalat a helyi kapcsolathoz pl.: ':/path/to/socket' a localhost-hoz.");
define("LANINS_031", "A felhasználónév, mellyel kapcsolódik az e107 a MySQL szerverhez");
define("LANINS_032", "A felhasználó jelszava, amit éppen beírsz. Nem tartalmazhat idézőjelet.");
define("LANINS_033", "Az e107 MySQL adatbázisa, néha hivatkozik egy sémára. Ha a felhasználó rendelkezik adatbázis létrehozása jogosultsággal, akkor választható az adatbázis automatikus létrehozása, ha még nem létezik.");
define("LANINS_034", "A prefix (előtag) az, amit az e107 használni fog, mikor létrehozza az adatbázis táblákat. Hasznos, ha összetett e107 telepítést kell végezni azonos adatbázisban.");
define("LANINS_036", "3. lépés");
define("LANINS_037", "MySQL Kapcsolat Ellenőrzése");
define("LANINS_038", " és Adatbázis Létrehozása");
define("LANINS_039", "Természetesen, ki kell töltened az összes mezőt, nagyon fontos: MySQL Szerver, MySQL Felhasználónév és MySQL Adatbázis (Ezekre mindig szüksége van a MySQL Szervernek)");
define("LANINS_040", "Hibák");
define("LANINS_041", "Az e107 nem tud kapcsolódni a MySQL szerverhez a beírt adatokkal. Ellenőrizd az adatok helyességét!");
define("LANINS_042", "A MySQL szerverhez történő kapcsolódás létrejött, ellenőrizve.");
define("LANINS_043", "Az adatbázis létrehozása sikertelen, ellenőrizd az adatbázis létrehozásához szükséges jogosultságokat a szerveren.");
define("LANINS_044", "Az adatbázis sikeresen létrejött.");
define("LANINS_045", "Katt a gombra a folyamat folytatásához.");
define("LANINS_046", "5. lépés");
define("LANINS_047", "Adminisztrátor adatai");
define("LANINS_048", "EXIF kiterjesztés");
define("LANINS_049", "A két, általad beírt jelszó nem azonos. Lépj vissza és próbáld újra.");
define("LANINS_050", "XML Kiterjesztés");
define("LANINS_051", "Telepítve");
define("LANINS_052", "Nincs telepítve");
define("LANINS_055", "Telepítés megerősítése");
define("LANINS_056", "6. lépés");
define("LANINS_057", " Az e107 rendelkezik a telepítéshez szükséges összes információval.
Katt a gombra az adatbázis táblák létrehozásához és a beállítások mentéséhez.");
define("LANINS_058", "7. lépés");
define("LANINS_060", "Sikertelen SQL fájl olvasás!
Ellenőrizd a [b]core_sql.php[/b] fájl létezését az [b]/e107_core/sql[/b] könyvtárban.");
define("LANINS_061", "Az e107 nem tudta létrehozni az összes, szükséges adatbázis táblát.
Töröld az adatbázist, az ismételt telepítés előtt javítani kell a problémát.");
define("LANINS_069", "Az e107 telepítése sikeresen végbement!
A biztonságos működés érdekében állítsd az [b]e107_config.php[/b] fájl jogosultságát 644-re. Ne feledkezz meg az install.php törléséről a szerverről a lenti gomb megnyomása után.");
define("LANINS_070", "Az e107 nem tudja elmenteni a konfigurációs fájlt a szerverre.
Ellenőrizd, hogy az [b]e107_config.php[/b] fájl a megfelelő jogosultsággal rendelkezik-e");
define("LANINS_071", "Telepítés befejezése");
define("LANINS_072", "Admin Felhasználónév");
define("LANINS_073", "Ezt a felhasználónevet kell használnod az oldalra történő bejelentkezéskor.
Ha akarod, ezt is használhatod megjelenő névként is");
define("LANINS_074", "Admin Megjelenő név");
define("LANINS_076", "Admin Jelszó");
define("LANINS_077", "Írd be az általad használni kívánt jelszót");
define("LANINS_078", "Admin Jelszó megerősítése");
define("LANINS_079", "Írd be újra a jelszót");
define("LANINS_080", "Admin email");
define("LANINS_081", "Írd be az e-mail címedet");
define("LANINS_083", "MySQL Jelentett hiba:");
define("LANINS_084", "A telepítő nem tud kapcsolódni az adatbázishoz");
define("LANINS_085", "A telepítő nem tudja kiválasztani az adatbázist:");
define("LANINS_086", "Az Admin Felhasználónév, Admin Jelszó és Admin Email mezőket [b]kötelező[/b] kitölteni! Írd be a megfelelő információkat.");
define("LANINS_105", "Az adatbázisnév vagy a prefix elején a következő jegyek 'e' vagy 'E' nem elfogadhatóak.");
define("LANINS_106", "FIGYELMEZTETÉS - Az E107 nem tud hozzáírni a kilistázott könyvtárakhoz és/vagy fájlokhoz. Mivel ez nem állítja le a telepítést, de bizonyos funkciók, tulajdonságok nem lesznek engedélyezve. Ezen tulajdonságok használatához meg kell változtatni a fájl jogosultságokat.");
define("LANINS_107", "Weboldal neve");
define("LANINS_108", "Az Én weboldalam");
define("LANINS_109", "Weboldal sablonja");
define("LANINS_111", "Tartalom/beállítások felvétele");
define("LANINS_112", "A sablonok előnézeteinek vagy bemutatójainak gyors előállítása. (ha engedélyezett)");
define("LANINS_113", "Írd be a weboldal nevét");
define("LANINS_114", "Válassz egy sablont");
define("LANINS_115", "Sablon neve");
define("LANINS_116", "Sablon típusa");
define("LANINS_117", "Weboldal Beállítások");
define("LANINS_118", "Bővítmények telepítése");
define("LANINS_119", "A sablonhoz szükséges összes bővítmény telepítése.");
define("LANINS_120", "8. lépés");
define("LANINS_121", "Az e107_config.php fájl nem üres");
define("LANINS_122", "Lehet, hogy már telepítetted a rendszert");
define("LANINS_123", "Opcionális: Publikus neved vagy az alias.
Hagyd üresen a felhasználónév használatához");
define("LANINS_124", "Válassz egy jelszót legalább 8 karakter hosszúsággal");
define("LANINS_125", "Az e107 sikeresen telepítve!");
define("LANINS_126", "A biztonságra tekintettel ne feledd az e107_config.php fájl jogosultságát visszaállítani 644-re.");
define("LANINS_127", "Az [x] adatbázis már létezik! Felülírod? (az összes adat el fog veszni)");
define("LANINS_128", "Felülírás");
define("LANINS_129", "Az Adatbázis nem található.");
define("LANINS_134", "Telepítés");
define("LANINS_135", "a");
define("LANINS_136", "Létező adatbázis törlése");
define("LANINS_137", "Már létezik az adatbázis");
define("LANINS_141", "Adja meg a MySQL adatokat.
Ha root jogosultsággal rendelkezel, akkor létre tudsz hozni új adatbázist a jelölődoboz bejelölésével.
Ha nem szükséges vagy már létezik, ne jelöld be.
Ha csak egy adatbázissal rendelkezel, akkor használj egy prefix-et, így egyéb adatokat is menthetsz azonos adatbázisba.
Ha nem ismered a MySQL adatokat, lépj kapcsolatba a szolgáltatóval.");
define("LANINS_142", "MEGJEGYZÉS:
nevezze át az e107.htaccess fájlt erre: .htaccess");
define("LANINS_144", "FONTOS: Kérjük, másolja ki és illessze be az [b]e107.htaccess[/b] tartalmát a [b].htaccess[/b] fájlba.
Kérjük, vigyázzon, nehogy felülírja a meglévő adatokat a fájlban.");
define("LANINS_145", "Az e107 v2.x használatához szükséges a telepített PHP [x] . Kérjük, vegye fel a kapcsolatot az ön tárhely szolgáltatójával vagy olvassa el [y] információkat mielőtt folytatná.");


?>