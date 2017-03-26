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
define("LANINS_001", "Installeren e107");
define("LANINS_002", "Stap");
define("LANINS_003", "1");
define("LANINS_004", "Taalkeuze");
define("LANINS_005", "Kies de taal die je bij installatie wilt gebruiken");
define("LANINS_007", "4");
define("LANINS_008", "PHP & MySQL Versie controle / Controle bestandspermissies");
define("LANINS_009", "Opnieuw testen permissies");
define("LANINS_010", "Bestand niet beschrijfbaar:");
define("LANINS_010a", "Map niet beschrijfbaar:");
define("LANINS_012", "MySQL functies lijken niet te bestaan. Dit betekent vermoedelijk dat de MySQL PHP extensies niet zijn geïnstalleerd of dat ze niet goed zijn geconfigureerd.");
define("LANINS_013", "Kon MySQL versienummer niet vast stellen. Dit is een niet fatale fout. Ga verder met de installatie maar wees er bewust van dat e107 MySQL >= 3.23 nodig heeft om correct te functioneren");
define("LANINS_014", "Bestands permissies");
define("LANINS_015", "PHP Versie");
define("LANINS_017", "GESLAAGD");
define("LANINS_018", "Zorg ervoor dat alle aangegeven bestanden bestaan en beschrijfbaar zijn door de server. (CHMOD is systeem afhankelijk, hou het zo laag mogelijk.) Voor meer informatie en de mogelijkheden wat betreft CHMOD verwijzen wij je naar je hostings provider.");
define("LANINS_019", "De op je server geïnstalleerde versie van PHP kan e107 niet aan. e107 0.7.x vereist een PHP versie van minimaal ".MIN_PHP_VERSION."  Ofwel upgrade je versie van PHP of neem contact op met je provider voor een upgrade.");
define("LANINS_021", "2");
define("LANINS_022", "MySQL server details");
define("LANINS_023", "Geef hier je MySQL instellingen op.

Als je root permissies bezit, kun je een nieuwe database creëren door het vakje aan te kruisen. Als je dat niet hebt, dat moet je zelf de database creëren of een bestaande gebruiken.

Als je maar één database mag aanmaken, gebruik dan een prefix zodat ook andere scripts dezelfde database kunnen gebruiken.
Als je je MySQL details niet kent, neem dan contact op met je web provider.");
define("LANINS_024", "MySQL server:");
define("LANINS_025", "MySQL gebruikersnaam:");
define("LANINS_026", "MySQL wachtwoord:");
define("LANINS_027", "MySQL database:");
define("LANINS_028", "Aanmaken database?");
define("LANINS_029", "Tabel prefix:");
define("LANINS_030", "De MySQL server die je voor e107 wilt gebruiken. Het kan ook een poortnummer bevatten, bijv. 'systeemnaam:poort' of een pad naar een lokale socket bijv. ':/pad/naar/socket' voor de localhost.");
define("LANINS_031", "De gebruikersnaam waarmee e107 een verbinding maakt met de MySQL server");
define("LANINS_032", "Het wachtwoord bij de gebruikersnaam die je net opgaf");
define("LANINS_033", "De MySQL database waar e107 gebruik van maakt heet ook wel een schema. Als de gebruiker de rechten heeft om een database te creëren, kun je ervoor kiezen om de database automatisch te laten aanmaken als die tenminste nog niet bestaat.");
define("LANINS_034", "De prefix die je voor e107 wilt gebruiken bij het aanmaken van de tabellen. Zinvol als meerdere installaties van een applicatie (bijv. e107) gebruik moeten maken van één database schema.");
define("LANINS_036", "3");
define("LANINS_037", "MySQL connectie verificatie");
define("LANINS_038", " en database creatie");
define("LANINS_039", "Let er goed op alle velden in te vullen, vooral MySQL Server, MySQL gebruikersnaam en MySQL Database (die zijn altijd nodig voor de MySQL Server)");
define("LANINS_040", "Fouten");
define("LANINS_041", "e107 kon met de informatie die je net opgaf geen verbinding maken met de MySQL server.<br />Ga terug naar de vorige pagina en controleer de opgegeven informatie.");
define("LANINS_042", "Verbinding met de MySQL server gemaakt en geverifieerd.");
define("LANINS_043", "De database kan niet worden gecreëerd. Controleer of je de juiste permissies hebt om databases op je server te creëren.");
define("LANINS_044", "Database succesvol aangemaakt.");
define("LANINS_045", "Druk op de knop om verder te gaan met de volgende stap.");
define("LANINS_046", "5");
define("LANINS_047", "Beheerdersinformatie");
define("LANINS_048", "EXIF Extensie");
define("LANINS_049", "De twee wachtwoorden die je hebt opgegeven, zijn niet gelijk. Ga terug en probeer het nog een keer.");
define("LANINS_050", "XML Extensie");
define("LANINS_051", "Geïnstalleerd");
define("LANINS_052", "Niet geïnstalleerd");
define("LANINS_055", "Bevestig installatie");
define("LANINS_056", "6");
define("LANINS_057", "e107 heeft nu alle informatie die nodig is om de installatie af te ronden.
Druk op de knop om de database tabellen aan te maken en de instellingen op te slaan.");
define("LANINS_058", "7");
define("LANINS_060", "Het sql gegevensbestand kon niet worden gelezen.
Controleer of het bestand [b]core_sql.php[/b] bestaat in de map [b]/e107_admin/sql/[/b].");
define("LANINS_061", "e107 kon niet alle vereiste databasetabellen aanmaken.
Maak de database leeg en herstel de problemen en probeer het daarna nog eens.");
define("LANINS_069", "e107 is succesvol geïnstalleerd!<br /><br />Omwille van beveiliging moet je nu de bestandpermissies op het [b]e107_config.php[/b] bestand terugzetten naar 644.(CHMOD is systeem afhankelijk, hou het zo laag mogelijk.) Voor meer informatie en de mogelijkheden wat betreft CHMOD verwijzen wij je naar je hostings provider.<br /><br />En verwijder ook het bestand install.php van je server nadat je op de knop hieronder hebt gedrukt");
define("LANINS_070", "e107 kon de configuratie instellingen niet wegschrijven op. Let erop dat het [b]e107_config.php[/b] bestand bestaat en de juiste permissies heeft");
define("LANINS_071", "Installatie Gereed");
define("LANINS_072", "Inlognaam beheerder");
define("LANINS_073", "Dit is de naam waarmee je moet inloggen op de site. Als je deze naam ook als weergegeven naam wilt gebruiken");
define("LANINS_074", "Weergegeven naam beheerder");
define("LANINS_076", "Beheerders wachtwoord");
define("LANINS_077", "Geef het beheerderswachtwoord op");
define("LANINS_078", "Bevestig het beheerderswachtwoord");
define("LANINS_079", "Voer het beheerderswachtwoord nogmaals in ter bevestiging");
define("LANINS_080", "e-mailadres beheerder");
define("LANINS_081", "Geef je e-mailadres op");
define("LANINS_083", "MySQL foutmelding:");
define("LANINS_084", "De installer kon geen verbinding maken met de database");
define("LANINS_085", "De installer kon deze database niet vinden:");
define("LANINS_086", "Admin inlognaam, Admin wachtwoord en Admin e-mailadres zijn [b]verplichte[/b] velden. Ga terug naar de vorige pagina en controleer of de informatie goed is ingevuld.");
define("LANINS_105", "Een database naam of prefix welke begint met een digit gevolgd door \"e\" of \"E\" is niet toegestaan. <br />Een database naam of prefix kan niet leeg zijn.");
define("LANINS_106", "Waarschuwing - e107 kan niet schrijven naar de bestanden of mappen welke worden weergegeven in de lijst. Dit maakt voor de installatie niet uit, alleen zijn sommige mogelijkheden niet beschikbaar.<br /><br />Om gebruik te kunnen maken van de mogelijkheden moet je nu of later de map of bestands permissie aanpassen");
define("LANINS_107", "Website Naam");
define("LANINS_108", "bijv.´Mijn Blog´");
define("LANINS_109", "Website Thema");
define("LANINS_111", "Sluit Content/Configuratie in");
define("LANINS_112", "Reproduceer op snelle wijze het uiterlijk van het thema voorbeeld of demo");
define("LANINS_113", "Vul een website naam in");
define("LANINS_114", "Selecteer een thema");
define("LANINS_115", "Thema naam");
define("LANINS_116", "Thema type");
define("LANINS_117", "Website voorkeuren");
define("LANINS_118", "Installeer Plugins");
define("LANINS_119", "Installeer alle plugins die het thema kan vereisen");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php bestaat reeds!");
define("LANINS_122", "Je hebt mogelijk een al bestaande installatie");
define("LANINS_123", "Optioneel: Je publieke naam of alias. Laat leeg om de gebruikersnaam te hanteren");
define("LANINS_124", "Kies aub een wachtwoord van ten minste 8 karakters");
define("LANINS_125", "e107 is succesvol geïnstalleerd!");
define("LANINS_126", "Beveiliging : bestandpermissies op het <b>e107_config.php</b> bestand terugzetten naar 644 (mogelijk is dit al systeemmatig gebeurd, controleren!.(CHMOD is systeem afhankelijk, hou het zo laag mogelijk.) Voor meer informatie en de mogelijkheden wat betreft CHMOD verwijzen wij je naar je hostings provider.<br /><br />Verwijder ook het bestand install.php van je server nadat je op de knop hieronder hebt gedrukt");
define("LANINS_127", "De database [x] bestaat al. Overschrijven? (alle bestaande gegevens zullen verloren gaan)");
define("LANINS_128", "Overschrijf");
define("LANINS_129", "Database niet gevonden.");
define("LANINS_134", "Installatie");
define("LANINS_135", "van");
define("LANINS_136", "Bestaande database verwijderd");
define("LANINS_137", "Bestaande database gevonden");
define("LANINS_141", "Vul onderstaand formulier in met je MySQL details. Contacteer je hosting provider als je deze niet weet. Je kunt bij de velden muis-over gebruiken voor extra informatie.");
define("LANINS_142", "BELANGRIJK: Hernoem e107.htaccess naar .htaccess aub.");
define("LANINS_144", "BELANGRIJK: Kopieër en plak de inhoud van het [b]e107.htaccess[/b] in jouw [b].htaccess[/b] bestand. Wees voorzichtig dat je eventueel bestaande data NIET overschrijft!.");
define("LANINS_145", "e107 v2.x vereist dat  PHP [x] is geïnstalleerd. Neem aub contact op met je hosting of lees de informatie op  [y] voordat je doorgaat.");


?>