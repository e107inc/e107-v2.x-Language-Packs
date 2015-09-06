<?php
/*
+ ----------------------------------------------------------------------------+
 * Dutch Language File for the e107 website system (http://e107.org).
 * $URL: file:///nfs/sf-svn/e/e1/e107dutch/code/trunk/e107_languages/Dutch/admin/help/news_category.php $
 * $Revision: 578 $
 * $Id: news_category.php 578 2012-11-03 18:16:17Z erje $
 * $Author: erje $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit(); }

$text = "Je kunt nieuwsberichten in verschillende categorieën onderverdelen en kunt bezoekers berichten per categorie laten zien. <br /><br />Upload je nieuwspictogrammen naar ofwel ".e_THEME."-jouwthema-/images/ of themes/shared/newsicons/.";
$ns -> tablerender("Nieuws categorie Hulp", $text);

?>