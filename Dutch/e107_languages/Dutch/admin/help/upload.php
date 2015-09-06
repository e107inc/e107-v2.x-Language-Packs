<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/upload.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "De bestandstypen en maximum bestands-groottes welke kunnen worden ge-upload worden ingesteld middels een gebruikersklasse. Deze optie genereert een bestand genaamd ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
		welke dient te worden gekopieerd of verplaatst naar de dir.map ".e_ADMIN_ABS." en hernoemd te worden naar ".e_READ_FILETYPES." voordat het effekt heeft.<br />
		Een (1) definitie per klasse is toegestaan.<br />
		Onthoudt dat deze definities voor de hele site gelden, ook wanneer publiekelijk uploaden is uitgeschakeld.";
    break;
  case 'options' :
    $text = "Het komplete publieke upload systeem kan hier worden uitgeschakeld.<br />
		Plat bestandsopslag is normaliter algemeen geschikt (anderzijds wordt de maximum bestandsgrootte hard-gelimiteerd tot 500kb).<br />
		De maximale bestandsgrootte heeft voorrang op de definitie zoals in filetypes.xml is ingesteld.<br />
		Publieke uploads kunnen worden ingesteld voor een principiele gebruikersklasse , maar deze instellingen zijn ook van toepassing op andere delen in het systeem waar publieke uploads mogelijk wel zijn toegestaan, zoals 
		nieuws en formulieren.";
	break;
  case 'view' :
  default :
	$text = "Deze pagina vertoont willekeurig elke ingezonden upload. Je kunt kiezen voor verwijdering, verplaatsen naar de downloads, of plaatsen in het nieuws";
}
$ns -> tablerender("Publieke Uploads Hulp", $text);
?>