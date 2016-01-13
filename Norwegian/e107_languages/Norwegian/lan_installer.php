<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Norwegian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2015/10/03 23:32:31
|
|        $Author: Administrador $
+---------------------------------------------------------------+
*/
define("LANINS_001", "e107 installasjon");
define("LANINS_002", "Trinn");
define("LANINS_003", "1");
define("LANINS_004", "Språkvalg");
define("LANINS_005", "Velg språket som skal brukes under installasjonen");
define("LANINS_007", "4");
define("LANINS_008", "PHP og MySQL versjoner sjekk / tillatelser ved systemstart");
define("LANINS_009", "Test filrettighetene igjen");
define("LANINS_010", "Kan ikke skrive til fil:");
define("LANINS_010a", "Katalogen er skrivebeskyttet:");
define("LANINS_012", "MySQL-funksjoner synes ikke å eksistere. Dette betyr sannsynligvis at enten MySQL PHP forlengelsen er ikke installert eller din PHP installasjon ikke var kompilert med MySQL støtte.");
define("LANINS_013", "Kunne ikke bestemme versjonsnummeret for din MySQL. Dette er en feil, så vennligst fortsette installasjonen, men vær oppmerksom på at e107 krever MySQL > = 3.23 for å fungere riktig.");
define("LANINS_014", "Filrettigheter");
define("LANINS_015", "PHP versjon");
define("LANINS_017", "Ferdig");
define("LANINS_018", "Forsikre deg om at alle listede filer eksisterer og at serveren har skrivetilgang til dem. Dette innebærer vanligvis å sette dem til CHMOD 777, men miljøer kan være ulike - kontakt din webserveradmini");
define("LANINS_019", "Versjonen av PHP installert på serveren ikke kan kjøre e107. e107 krever en PHP versjon av minst '. MIN_PHP_VERSION.'kjører riktig. Enten oppgradere din PHP-versjon, eller kontakt din vert for en oppgradering.");
define("LANINS_021", "2");
define("LANINS_022", "MySQL serverdetaljer");
define("LANINS_023", "Angi MySQL innstillingene her.

Hvis du har root-tilgang kan du opprette en ny database ved å krysse boksen hvis ikke du må opprette en database eller bruke en eksisterende.

Hvis du har bare én database bruker et prefiks slik at andre skript kan dele samme database.
Hvis du ikke vet kontakte MySQL detaljene webverten.");
define("LANINS_024", "MySQL Server:");
define("LANINS_025", "MySQL brukernavn:");
define("LANINS_026", "MySQL passord:");
define("LANINS_027", "MySQL database:");
define("LANINS_028", "Opprett database?");
define("LANINS_029", "Tabellprefiks:");
define("LANINS_030", "MySQL server du ønsker e107 bruke. Det kan også inkludere et portnummer. f.eks 'hostname:port' eller en bane til en lokal socket f.eks \':/path/to/socket\' for localhost.");
define("LANINS_031", "Brukernavnet du ønsker e107 å koble til MySQL-server");
define("LANINS_032", "Passordet for brukeren du oppgav. Må ikke inneholde enkle eller doble anførselstegn.");
define("LANINS_033", "MySQL-databasen du vil e107 i, referert noen ganger til som et skjema. Må begynne med en bokstav. Hvis brukeren har database opprette tillatelser kan du velge for å lage databasen automatisk hvis den ikke allerede finnes.");
define("LANINS_034", "Prefikset du vil at e107 skal benytte når tabellene skal opprettes. Kan brukes til til å kjøre flere ulike e107 eller andre applikasjoner i samme database/skjema.");
define("LANINS_036", "3");
define("LANINS_037", "Verifiering av MySQL tilkobling");
define("LANINS_038", " og opprettelse av database");
define("LANINS_039", "Pass på at du fyller ut alle felt, viktigst er MySQL Server, MySQL brukernavn og MySQL database (Disse kreve alltid av MySQL serveren)");
define("LANINS_040", "Feil");
define("LANINS_041", "e107 kunne ikke opprette en tilkobling til MySQL server bruker informasjonen. Gå tilbake til den siste siden og sikre informasjonen er riktig.");
define("LANINS_042", "Tilkobling til MySQL serveren opprettet og verifisert.");
define("LANINS_043", "Kunne ikke opprette en database. Kontroller at du har tilstrekkelige rettigheter for å opprette nye databaser på serveren din.");
define("LANINS_044", "Database opprettet uten feil.");
define("LANINS_045", "Klikk på knappen for å gå videre til neste trinn.");
define("LANINS_046", "5");
define("LANINS_047", "Administratorinformasjon");
define("LANINS_048", "EXIF informasjon");
define("LANINS_049", "To passordene du oppgav er ikke det samme. Vennligst gå tilbake og prøv på nytt.");
define("LANINS_050", "XML modul");
define("LANINS_051", "Installert");
define("LANINS_052", "Ikke installert");
define("LANINS_053", "e107 v2.x krever PHP XML-filtypen er installert. Kontakt verten eller lese informasjonen på [x] før du fortsetter");
define("LANINS_054", "e107 v2.x krever at PHP EXIF informasjonen er installert. Vennligst ta kontakt med din host eller lese informasjonen på [x] før du fortsetter");
define("LANINS_055", "Installasjonsbekreftelse");
define("LANINS_056", "6");
define("LANINS_057", "e107 har nå all informasjon den trenger for å fullføre installasjonen.

Klikk for å opprette databasen og lagre alle innstillingene.");
define("LANINS_058", "7");
define("LANINS_060", "Kan ikke lese sql datafile Vennligst sikre filen [b]core_sql.php[/b] finnes i [b] e107_core/sql [/ b] mappen.");
define("LANINS_061", "e107 kunne ikke opprette alle de nødvendige database-tabellene.
Vennligst Fjern databasen og korrigere eventuelle problemer før du prøver igjen.");
define("LANINS_069", "e107 er installert!

Av sikkerhetsgrunner bør du nå angi filtillatelsene på filen [b]e107_config.php[/b] tilbake til 644.

Også må slette install.php fra serveren etter at du har klikket på knappen nedenfor.");
define("LANINS_070", "e107 kunne ikke lagre viktigste konfigurasjonsfilen til serveren.

Kontroller filen [b]e107_config.php[/b] har de riktige tilgangsrettighetene");
define("LANINS_071", "Installasjon fullført");
define("LANINS_072", "Adminbrukernavn");
define("LANINS_073", "Dette er navnet du vil bruke for å logge inn på området. Hvis du ønsker å bruke som visningsnavnet også");
define("LANINS_074", "Synlig Adminnavn");
define("LANINS_076", "Adminpassord");
define("LANINS_077", "Oppgi passordet du ønsker for admin.");
define("LANINS_078", "Admin passordbekreftelse");
define("LANINS_079", "Oppgi admins passord igjen for verifisering.");
define("LANINS_080", "Admin epost");
define("LANINS_081", "Skriv inn epostadressen din");
define("LANINS_083", "MySQL rapportert feil:");
define("LANINS_084", "Installereren kunne ikke oprette en forbindelse med databasen");
define("LANINS_085", "Installereren klarte ikke å velge database:");
define("LANINS_086", "Admin Username, Admin passord og Admin epost er [b] nødvendig [/ b] felt. Gå tilbake til den siste siden og sikre informasjonen er riktig angitt.");
define("LANINS_105", "En databasen navnet på eller prefikset begynner med noen tall etterfulgt av 'e' eller 'E' er ikke akseptabelt");
define("LANINS_106", "Advarsel - e107 ikke kan skrive til kataloger og/eller filene. Mens dette ikke vil stoppe e107 installere, vil det bety at enkelte funksjoner ikke er tilgjengelige.
				Du må endre filrettigheter å bruke disse funksjonene");
define("LANINS_107", "Nettstedet navn");
define("LANINS_108", "Min nettside");
define("LANINS_109", "Nettsted tema");
define("LANINS_111", "Inkludere innhold/konfigurasjon");
define("LANINS_112", "Raskt gjengi utseendet på Tema forhåndsvisning eller demo. (Hvis tilgjengelig)");
define("LANINS_113", "Skriv inn et nettsted navn");
define("LANINS_114", "Velg et tema");
define("LANINS_115", "Temanavn");
define("LANINS_116", "Tematype");
define("LANINS_117", "Hjemmeside valg");
define("LANINS_118", "Installere Plugins");
define("LANINS_119", "Installere alle plugins som tema.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php er ikke en tom fil");
define("LANINS_122", "Du kan ha en eksisterende installasjon");
define("LANINS_123", "Valgfritt: Offentlig navn eller alias. Bruke brukernavnet er tomt");
define("LANINS_124", "Velg et passord på minst 8 tegn");
define("LANINS_125", "e107 er installert!");
define("LANINS_126", "Av sikkerhetsgrunner bør du nå angi filtillatelsene på filen e107_config.php tilbake til 644.");
define("LANINS_127", "Databasen [x] finnes allerede. Vil du overskrive den? (eksisterende data vil gå tapt)");
define("LANINS_128", "Overskrive");
define("LANINS_129", "Databasen ikke funnet.");


?>