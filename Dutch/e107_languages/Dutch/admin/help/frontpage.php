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

if (!defined('e107_INIT')) { exit; }

$caption = "Startpagina Hulp";
/* FIXME - English native speakers: what should stay and what should go? 
	<p>
		The list of rules are scanned in turn, until the class of the current user matches. 
		This then determines the user's front (home) page, and also the page he sees immediately after login.
	</p>
 */
$text = "
<p>
	Hier kun je de startpagina van je site instellen.<br>Bijvoorbeeld het forum, of een zelf gemaakte pagina.<br />Ook behoort het tot de mogelijkheden om een externe pagina in te stellen.<br /><br />De standaard ingestelde pagina is news.php.
</p>
<p>
	De voorwaarden worden op volgorde doorzocht, zoekend naar de eerste voorwaarde waaraan wordt voldaan, als de huidige gebruiker toebehoort aan de klasse zoals beschreven in de voorwaarde. 
<br>Die voorwaarde bepaalt dan de start (home) pagina en elke specifieke (na inlog) pagina.<br>Is er geen overeenkomst gevonden wordt news.php als startpagina ingesteld.
</p>
<p>
	De gebruiker wordt verwezen naar de specifieke 'Pagina na inloggen' (indien gespecificeerd) direct gevolgd door een login.
</p>
";
$ns->tablerender($caption, $text, "beheer_hulp");
?>