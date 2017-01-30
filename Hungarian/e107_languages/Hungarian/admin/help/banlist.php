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

$caption = "Kitiltások súgó";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
  $text = 'This page allows you to transfer banlist data to and from this site as CSV (Comma Separated Variable) files.<br /><br />';
  $text .= "<b>Data Export</b><br />
  Select the types of ban to export. The fields will be delimited by the chosen separator, and optionally included within the selected quotation marks.<br /><br />";
  $text .= "<b>Data Import</b><br />
  You can choose whether the imported bans replace existing imported bans, or whether they add to the list. If the imported data includes an expiry date/time, you
  can select whether this is used, or whether the value for this site is used.<br /><br />";
  $text .= "<b>CSV Format</b><br />
  The format of each line in the file is: IP/email, date, expiry, type, reason, notes.<br />
  Date and expiry are in the format YYYYMMDD_HHMMDD, except that a zero value indicates 'unknown' or 'indefinite'<br />
  Only the IP or email address is essential; the other fields are imported if present.<br /><br />
  <b>Note:</b> You will need to modify filetypes.xml to allow admins to upload the 'CSV' file type.";
  break;
case 'times' :
  $text = 'This page sets the default behaviour for various types of ban.<br />
  If a message is specified, this will be shown to the user (where appropriate). If the message starts with \'http://\' or \'https://\' control is 
  passed to the specified URL. Otherwise the user will most likely get a blank screen.<br />
  The ban will be in force for the time specified; after which it will be cleared next time they access the site.';
  break;
case 'options' :
  $text = '<b>Reverse DNS</b><br />
    If enabled, the user\'s IP address is looked up to obtain the associated domain name. This accesses an external server, so there may
	be a delay before the information is available - and if the server is off-line, there may be a very long delay.<br /><br />
	You can choose to look up server names on all site accesses, or only when adding a new ban.<br /><br />
	<b>Maximum Access Rate</b><br />
	This sets the maximum number of site accesses permitted from a single user or IP address in any five-minute period, and is intended
	to detect denial of service attacks. At 90% of the selected limit, the user receives a warning; on reaching the limit they are banned.
	Different thresholds may be set for guests and logged-in users.<br /><br />
	<b>Retrigger Ban Period</b><br />
	This option is only relevant if the option to ban users for a specified time, rather than indefinitely, has been used. If enabled, and
	the user attempts to access the site, the ban period is extended (as if the ban had just started).
	';
  break;
case 'edit' :
case 'add' :
$text = "Kitilthatsz felhasználókat az oldalról itt.<br />
Add meg a teljes IP címet, vagy használj *-ot egy IP cím tartomány kitiltásához.<br /><br />
<b>Kitiltás IP címmel:</b><br />
Az 123.123.123.123 IP cím megadásával letiltod az erről a címről érkező felhasználókat.<br />
Az 123.123.123.* IP cím megadásával letiltod az erről az IP cím tartományról érkező 
felhasználókat.<br /><br />
<b>Kitiltás email címmel</b><br />
A foo@bar.com email cím megadása letiltja ennek az email címnek a használatát, így e címmel senki nem fog tudni regisztrálni.<br />
Az *@bar.com cím megadása a bar.com domain-t tiltja le, így e domainről semmilyen email címmel senki nem fog tudni regisztrálni.<br /><br />
<b>Kitiltás felhasználónévvel</b><br />
Ezt végrehajthatod a felhasználók adminisztrációs oldalról.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "You can specify IP addresses which you know to be 'friendly' here - generally those for the main site admins, to guarantee that they can
  always gain access to the site.<br />
  You are advised to keep the number of addresses in this list to an absolute minimum; both for security, and to minimise the impact on site performance.";
  break;
case 'banlog' :
  $text = 'This shows a list of all site accesses involving an address which is in the ban list or the white list. The \'reason\' column shows the outcome.';
  break;
case 'white' :
  $text = "This page shows a list of all IP addresses and email addresses which are explicitly permitted.<br />
    This list takes priority over the ban list - it should not be possible for an address from this list to be banned.<br />
	All addresses must be manually entered.";
  break;
case 'list' :
default :
$text = 'Kitilthatsz felhasználókat az oldalról itt.<br />
Add meg a teljes IP címet, vagy használj *-ot egy IP cím tartomány kitiltásához.<br /><br />
<b>Kitiltás IP címmel:</b><br />
Az 123.123.123.123 IP cím megadásával letiltod az erről a címről érkező felhasználókat.<br />
Az 123.123.123.* IP cím megadásával letiltod az erről az IP cím tartományról érkező 
felhasználókat.<br /><br />
<b>Kitiltás email címmel</b><br />
A foo@bar.com email cím megadása letiltja ennek az email címnek a használatát, így e címmel senki nem fog tudni regisztrálni.<br />
Az *@bar.com cím megadása a bar.com domain-t tiltja le, így e domainről semmilyen email címmel senki nem fog tudni regisztrálni.<br /><br />
<b>Kitiltás felhasználónévvel</b><br />
Ezt végrehajthatod a felhasználók adminisztrációs oldalról.<br /><br />';
}
$ns -> tablerender($caption, $text);
?>