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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/cpage.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "In dit scherm kun je maatwerk menu's en maatwerk pagina's maken waarin je je eigen content opvoert.<br />Menu&acute;s and Pagina&acute;s worden aan elkaar gelinkt zodat je makkelijk een menu kunt linken aan een pagina als je dat wilt. ";
// $text .= "Please see <a href='http://docs.e107.org/Using Custom Pages and Custom Menus'>http://docs.e107.org/Using Custom Pages and Custom Menus</a> for an explanation of all the features.";

$ns -> tablerender("Maatwerk Menus/Paginas Hulp", $text);
?>