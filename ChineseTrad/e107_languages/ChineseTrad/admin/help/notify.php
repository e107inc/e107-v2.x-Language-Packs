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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/notify.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "《通知》會寄送 Email 通知當 e107 項目發生。<br /><br />
例如,設定「因流量攻擊(Flood)而禁止 IP」 給使用者等級為系統管理的話,當您的網站被流量攻擊(Flood)時候會寄給全部的系統管理員。<br /><br />
另一個例子,您也可設定「系統管理員發表新聞項目」給使用者等級為會員的話，會寄送 Email 系統管理員發表的新聞項目給所有使用者。<br /><br />
如您要將通知寄送到另一個 Email 位址的話，請選擇 Email 選項並在提供的欄位中輸入 Email 位址。";

$ns -> tablerender("Notify Help", $text);
