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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/cache.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "《快取》";
$text = "如您打開快取會大大提高如您打開快取會大大提高網站的速度及使 SQL 資料庫呼叫數量最少化。
<br /><br /><b>重要! 如您在製作自己的佈景主題請停用快取，否則您作的任何變更都不會立即反映。</b>";
$ns -> tablerender($caption, $text);
