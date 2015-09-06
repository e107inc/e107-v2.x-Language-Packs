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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/administrator.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Beheerder menu Hulp";
$text = "Gebruik dit scherm om nieuwe beheerders toe te voegen, of om beheerdersrechten in te trekken. Een beheerder heeft uitsluitend toegang tot de aangevinkte functies.<br /><br />
Om een nieuwe beheerder aan te stellen, moet je naar de leden beheer pagina gaan en een bestaand lid de beheerdersstatus toekennen.";
$ns -> tablerender($caption, $text);
?>