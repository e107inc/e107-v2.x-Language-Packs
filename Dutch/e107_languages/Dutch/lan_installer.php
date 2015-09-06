<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Dutch Language File.
|
|     $URL:$
|     $Revision:$
|     $Date:$
|     $Author: Erje, Yvalni, Tgtje $
+----------------------------------------------------------------------------+
*/


define("LANINS_001",   	"Installeren e107");


define("LANINS_002",	"Stap");
define("LANINS_003", 	"1");
define("LANINS_004", 	"Taalkeuze");
define("LANINS_004a",	"Taal geselecteerd");
define("LANINS_005", 	"Kies de taal die je bij installatie wilt gebruiken");
define("LANINS_006", 	"Instellen taal");
define("LANINS_007", 	"4");
define("LANINS_008", 	"PHP &amp; MySQL Versie controle / Controle bestandspermissies");
define("LANINS_009",  	"Opnieuw testen permissies");
define("LANINS_010",  	"Bestand niet beschrijfbaar: ");
define("LANINS_010a",	"Map niet beschrijfbaar: ");
define("LANINS_011",  	"Fout");
define("LANINS_012",  	"MySQL functies lijken niet te bestaan. Dit betekent vermoedelijk dat de MySQL PHP extensies niet zijn geïnstalleerd of dat ze niet goed zijn geconfigureerd."); // help for 012
define("LANINS_013", 	"Kon MySQL versienummer niet vast stellen. Dit is een niet fatale fout. Ga verder met de installatie maar wees er bewust van dat e107 MySQL >= 3.23 nodig heeft om correct te functioneren ");
define("LANINS_014", 	"Bestands permissies");
define("LANINS_015", 	"PHP Versie");
define("LANINS_016", 	"MySQL");
define("LANINS_017", 	"GESLAAGD");
define("LANINS_018", 	"Zorg ervoor dat alle aangegeven bestanden bestaan en beschrijfbaar zijn door de server. (CHMOD is systeem afhankelijk, hou het zo laag mogelijk.) Voor meer informatie en de mogelijkheden wat betreft CHMOD verwijzen wij je naar je hostings provider.");
define("LANINS_019", 	"De op je server geïnstalleerde versie van PHP kan e107 niet aan. e107 0.7.x vereist een PHP versie van minimaal ".MIN_PHP_VERSION."  Ofwel upgrade je versie van PHP of neem contact op met je provider voor een upgrade.");
define("LANINS_020", 	"Verder met installatie");
define("LANINS_021", 	"2");
define("LANINS_022", 	"MySQL server details");
define("LANINS_023", 	"Geef hier je MySQL instellingen op.

Als je root permissies bezit, kun je een nieuwe database creëren door het vakje aan te kruisen. Als je dat niet hebt, dat moet je zelf de database creëren of een bestaande gebruiken.

Als je maar één database mag aanmaken, gebruik dan een prefix zodat ook andere scripts dezelfde database kunnen gebruiken.
Als je je MySQL details niet kent, neem dan contact op met je web provider.");

define("LANINS_024", 	"MySQL server:");
define("LANINS_025", 	"MySQL gebruikersnaam:");
define("LANINS_026", 	"MySQL wachtwoord:");
define("LANINS_027", 	"MySQL database:");
define("LANINS_028", 	"Aanmaken database?");
define("LANINS_029", 	"Tabel prefix:");
define("LANINS_030", 	"De MySQL server die je voor e107 wilt gebruiken. Het kan ook een poortnummer bevatten, bijv. 'systeemnaam:poort' of een pad naar een lokale socket bijv. ':/pad/naar/socket' voor de localhost.");
define("LANINS_031", 	"De gebruikersnaam waarmee e107 een verbinding maakt met de MySQL server");
define("LANINS_032", 	"Het wachtwoord bij de gebruikersnaam die je net opgaf");
define("LANINS_033", 	"De MySQL database waar e107 gebruik van maakt heet ook wel een schema. Als de gebruiker de rechten heeft om een database te creëren, kun je ervoor kiezen om de database automatisch te laten aanmaken als die tenminste nog niet bestaat.");
define("LANINS_034", 	"De prefix die je voor e107 wilt gebruiken bij het aanmaken van de tabellen. Zinvol als meerdere installaties van een applicatie (bijv. e107) gebruik moeten maken van één database schema.");
define("LANINS_035", 	"Verder");
define("LANINS_036", 	"3");
define("LANINS_037", 	"MySQL connectie verificatie");
define("LANINS_038", 	" en database creatie");
define("LANINS_039", 	"Let er goed op alle velden in te vullen, vooral MySQL Server, MySQL gebruikersnaam en MySQL Database (die zijn altijd nodig voor de MySQL Server)");
define("LANINS_040", 	"Fouten");
define("LANINS_041", 	"e107 kon met de informatie die je net opgaf geen verbinding maken met de MySQL server.<br />Ga terug naar de vorige pagina en controleer de opgegeven informatie.");
define("LANINS_042", 	"Verbinding met de MySQL server gemaakt en geverifieerd.");
define("LANINS_043", 	"De database kan niet worden gecreëerd. Controleer of je de juiste permissies hebt om databases op je server te creëren.");
define("LANINS_044", 	"Database succesvol aangemaakt.");
define("LANINS_045", 	"Druk op de knop om verder te gaan met de volgende stap.");
define("LANINS_046", 	"5");
define("LANINS_047", 	"Beheerdersinformatie");
define("LANINS_048", 	"Ga terug naar de vorige stap");
define("LANINS_049", 	"De twee wachtwoorden die je hebt opgegeven, zijn niet gelijk. Ga terug en probeer het nog een keer.");
define("LANINS_050", 	"XML Extensie");
define("LANINS_051", 	"Geïnstalleerd");
define("LANINS_052", 	"Niet geïnstalleerd");
define("LANINS_053", 	"e107 vereist de PHP XML Extensies. Neem contact op met je provider of lees de informatie op [link=http://php.net/manual/en/ref.xml.php]php.net[/link] voor je verder gaat");
define("LANINS_054",	"De gekozen database is succesvol op aanwezigheid gecontroleerd.");
define("LANINS_055", 	"Bevestig installatie");
define("LANINS_056", 	"6");
define("LANINS_057", 	"e107 heeft nu alle informatie die nodig is om de installatie af te ronden.
Druk op de knop om de database tabellen aan te maken en de instellingen op te slaan.

");
define("LANINS_058", 	"7");
define("LANINS_060", 	"Het sql gegevensbestand kon niet worden gelezen.
Controleer of het bestand [b]core_sql.php[/b] bestaat in de map [b]/e107_admin/sql/[/b].");
define("LANINS_061", 	"e107 kon niet alle vereiste databasetabellen aanmaken.
Maak de database leeg en herstel de problemen en probeer het daarna nog eens.");

define("LANINS_062", 	"[b] Welkom op je nieuwe website! [/ b]
e107 is succesvol geïnstalleerd en is nu klaar om de inhoud te aanvaarden. <br /> De administratie sectie is [link = e107_admin / admin.php] zich hier [/ link], klik om daar nu gaan. Je moet inloggen met de naam en het wachtwoord dat je hebt ingevoerd tijdens het installatieproces.

[B] Ondersteuning [/ b]
e107 Homepage: [link = http: //e107.org] http://e107.org [/ link],  De FAQ en de documentatie vindt je hier.
Forums: [link=http://e107.org/e107_plugins/forum/forum.php]http://e107.org/e107_plugins/forum/forum.php[/link]
Plugin Developer Community: [link = http: //www.e107coders.org] http://e107coders.org [/ link]

[B] Downloads [/ b]
Plugins: [link = http: //plugins.e107.org] http://plugins.e107.org [/ link]
Thema´s: [link = http: //themes.e107.org] http://themes.e107.org [/ link]

Bedankt voor het uitproberen e107, we hopen dat het aan je behoeften voldoet.
(Je kunt dit bericht vanuit het admin gedeelte te verwijderen.) ");


define("LANINS_069", 	"e107 is succesvol geïnstalleerd!<br /><br />Omwille van beveiliging moet je nu de bestandpermissies op het [b]e107_config.php[/b] bestand terugzetten naar 644.(CHMOD is systeem afhankelijk, hou het zo laag mogelijk.) Voor meer informatie en de mogelijkheden wat betreft CHMOD verwijzen wij je naar je hostings provider.<br /><br />En verwijder ook het bestand install.php van je server nadat je op de knop hieronder hebt gedrukt");
define("LANINS_070", 	"e107 kon de configuratie instellingen niet wegschrijven op. Let erop dat het [b]e107_config.php[/b] bestand bestaat en de juiste permissies heeft");
define("LANINS_071", 	"Installatie Gereed");

define("LANINS_072", 	"Inlognaam beheerder");
define("LANINS_073", 	"Dit is de naam waarmee je moet inloggen op de site. Als je deze naam ook als weergegeven naam wilt gebruiken");
define("LANINS_074", 	"Weergegeven naam beheerder");
define("LANINS_075", 	"Dit is de naam die je gebruikers op de site weergegeven zien in het profiel, de forums en de andere onderdelen. Als je je loginnaam hiervoor wilt gebruiken, vul dan niets in.");
define("LANINS_076", 	"Beheerders wachtwoord");
define("LANINS_077", 	"Geef het beheerderswachtwoord op");
define("LANINS_078", 	"Bevestig het beheerderswachtwoord");
define("LANINS_079", 	"Voer het beheerderswachtwoord nogmaals in ter bevestiging");
define("LANINS_080", 	"e-mailadres beheerder");
define("LANINS_081", 	"Geef je e-mailadres op"); 
define("LANINS_082", 	"gebruiker@jouwsite.net");
define("LANINS_083", 	"MySQL foutmelding:");
define("LANINS_084", 	"De installer kon geen verbinding maken met de database");
define("LANINS_085", 	"De installer kon deze database niet vinden:");
define("LANINS_086", 	"Admin inlognaam, Admin wachtwoord en Admin e-mailadres zijn [b]verplichte[/b] velden. Ga terug naar de vorige pagina en controleer of de informatie goed is ingevuld.");
define("LANINS_087", 	"Div");
define("LANINS_088", 	"Home");
define("LANINS_089", 	"Downloads");
define("LANINS_090", 	"Leden");
define("LANINS_091", 	"Aanmelden nieuws");
define("LANINS_092", 	"Contact");
define("LANINS_093", 	"Verleent toegang tot persoonlijke menu´s");
define("LANINS_094", 	"Voorbeeld besloten forum klasse");
define("LANINS_095", 	"Integriteitscontrole");
define("LANINS_096", 	"Laatste reacties");
define("LANINS_097", 	"[meer ...]");

define("LANINS_100", 	"Laatste forumberichten");
define("LANINS_101", 	"Bijwerken menu instellingen");
define("LANINS_102", 	"Datum / tijd");

define("LANINS_105", 	"Een database naam of prefix welke begint met een digit gevolgd door \"e\" of \"E\" is niet toegestaan. <br />Een database naam of prefix kan niet leeg zijn.");
define("LANINS_106", 	"Waarschuwing - e107 kan niet schrijven naar de bestanden of mappen welke worden weergegeven in de lijst. Dit maakt voor de installatie niet uit, alleen zijn sommige mogelijkheden niet beschikbaar.<br /><br />Om gebruik te kunnen maken van de mogelijkheden moet je nu of later de map of bestands permissie aanpassen");
define("LANINS_107",	"Website Naam");
define("LANINS_108",	"bijv.´My Blog´");

define("LANINS_109",	"Website Thema");
define("LANINS_110",	"");
define("LANINS_111",	"e107 Themes");
define("LANINS_112",	"e107 Handleiding");
define("LANINS_113",	"Vul een website naam in");
define("LANINS_114", 	"Selecteer een thema");
define("LANINS_115", 	"Thema naam");
define("LANINS_116", 	"Thema type");
define("LANINS_117", 	"Website voorkeuren");
define("LANINS_118", 	"Installeer Plugins");
define("LANINS_119", 	"Installeer alle plugins die het thema kan vereisen");
define("LANINS_120", 	"8");

define("LANINS_121",	"e107_config.php bestaat reeds!");
define("LANINS_122",	"Je hebt mogelijk een al bestaande installatie");
define("LANINS_123",	"Debug info");
define("LANINS_124",	"Backtrace");
define("LANINS_125",	"e107 is succesvol geïnstalleerd!");
define("LANINS_126",	"Beveiliging : bestandpermissies op het <b>e107_config.php</b> bestand terugzetten naar 644 (mogelijk is dit al systeemmatig gebeurd, controleren!.(CHMOD is systeem afhankelijk, hou het zo laag mogelijk.) Voor meer informatie en de mogelijkheden wat betreft CHMOD verwijzen wij je naar je hostings provider.<br /><br />Verwijder ook het bestand install.php van je server nadat je op de knop hieronder hebt gedrukt");
define("LANINS_127", 	"De database [x] al bestaat. Overschrijven? (alle bestaande gegevens verloren zullen gaan)"); 
define("LANINS_128", 	"Overschrijf"); 
define("LANINS_129", 	"Database niet gevonden.");

define("LANINS_130", 	"Geparkeerd Domein");
define("LANINS_131", 	"Het geparkeerde domein wordt een nieuwe e107 website.");
define("LANINS_132", 	"mijndomein.nl");
define("LANINS_133", 	"Dit installeert een nieuwe e107 website op het door jou aangegeven domein. Met behulp van je server administratiesoftware (b.v. cPanel) - kan je je andere domein parkeren op [x]");
?>