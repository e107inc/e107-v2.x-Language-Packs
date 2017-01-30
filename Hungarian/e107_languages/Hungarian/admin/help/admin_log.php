<?php
/*
+--------------------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/04/22 13:08:21
|
|        $Author: Yesszus $
|        Web: https://github.com/yesszus/e107-v2.x-Language-Packs/releases
|
+--------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Rendszer Naplózás";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Adatszűrők</b><br />Különböző szűrőket adhat meg, amelyek korlátozzák a megjelenő adatmennyiséget.<br />Ezek megmaradnak a cookie-ban, amíg nem kapcsolja ki.<br />A kezdési és befejezési dátum/idő szűrőket kell engedélyezni a jelölőnégyzetekben.<br />Az egyéb szűrők aktívak, ha van egy érték a mezőben.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "This page displays that user activity which you have chosen to log.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "This page configures various options for the system logs.<br /><br />
  <b>Common Settings</b><br />
  Sets the number of lines on the log display.<br /><br />
  <b>Admin Log</b><br />
  This log retains events until specifically deleted; use this option to delete old events.<br /><br />
  <b>User Audit Log</b><br />
  This log tracks user activity. For registered users, only those in the specified class are tracked - you can either make this 'Members' to track 
  everyone, or create a specific user class for logging. You then determine the types of activity which you wish to log.<br />
  Registration events may be tracked separately.<br /><br />
  <b>Rolling Log</b><br />
  This log is used to track abnormal events, assist with debugging etc. It can be disabled. Events are automatically removed after the set number of days.
  ";
  break;
case 'rolllog' :
  $text = "The rolling log displays various abnormal events which are not otherwise logged. It may also be used for code debugging and monitoring.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "This page displays user downloads.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "This page displays user comments, with options to select by user ID, type and date. Unwanted comments can be deleted.";
  break;
case 'detailed' :
  $text = "The main system logs record time to a high degree of precision (if the underlying server supports it), and this page allows you to inspect entries
	occuring within a relatively small time window. Entries from the admin log, audit log and rolling log are merged, so that you can see the precise 
	relationships between events.";
  break;
case 'adminlog' :
default :
  $text = "Ezen az oldalon láthatóak az adminisztrátor aktivitások.<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
?>