<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/04/22 13:08:21
|
|        $Author: Yesszus $
+---------------------------------------------------------------+
*/

if(!defined('e107_INIT')){ die("Unauthorised Access");}
if (!getperms("2")) {
	header("location:".e_BASE."index.php");
	 exit;
}

$sql = e107::getDb();
$tp = e107::getParser();

if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$sql -> db_Select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql-> db_Fetch())
			{
				$sql2 -> db_Update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menük visszaállítása az adatbázisban</b><br /><br />";
		}
}
else
{
	unset($text);
}

$frm = e107::getForm();

$text = "Beállíthatod, hogy mely menük, hol, s milyen sorrendben jelenjenek meg. 
A nyilak segítségével mozgasd a menüket a megfelelő pozícióba. 
<br />
A középen listázott menük inaktívak. Bekapcsolhatod őket, ha megadod, hogy hol jelenjenek meg. Ha úgy tűnik, hogy a menükkel valami nincs rendben, nyomd meg a Frissítés gombot.
<br />
[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('reset','Frissítés','cancel')."</div>
</form>
<div class='indent'><br /><span class='required'><i class='icon-search icon-white'></i></span> jelzi, ha a menü láthatóságát, elérhetőségét módosítottad.</div>
[/html]
";

$text = $tp->toHtml($text,true);
$ns -> tablerender("Menü Súgó", $text);
