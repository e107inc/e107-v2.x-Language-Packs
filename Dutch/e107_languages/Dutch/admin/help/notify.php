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

if (!defined('e107_INIT')) { exit; }

$text = "Notify (berichtgeving)) verstuurd e-mail berichten wannneer er e107 gebeurtenissen plaats vinden.<br /><br />
Bijvoorbeeld, stel “IP geblokkeerd voor site flooding” in voor de gebruikersklasse “Admin” en alle admins krijgen een e-mail wanneer je site word geflood (te vaak achter elkaar word opgevraagd vanuit hetzelfde ip).<br /><br />
Je kan ook, als een ander voorbeeld, 'Nieuws item geplaatst door beheerder' in stellen op gebruikersklasse 'Leden' en al je Leden krijgen het nieuws bericht dat je gepost hebt op je site toegestuurd via e-mail.<br /><br />
Als je wilt dat de e-mail berichten worden verstuurd naar een alternatief e-mailadres - selecteer de 'e-mail' optie en vul het e-mailadres in in het beschikbare veld..";

$ns -> tablerender("Berichtfunctie Hulp", $text);
?>