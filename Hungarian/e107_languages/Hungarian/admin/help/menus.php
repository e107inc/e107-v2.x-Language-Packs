<?php
/*
+--------------------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/02/22 13:12:49
|
|        $Author: Yesszus $
|        Web: https://github.com/yesszus/e107-v2.x-Language-Packs/releases
|
+--------------------------------------------------------------------------+
*/

if(!defined('e107_INIT')){ exit; }
if (!getperms("2")) 
{
	header("location:".e_BASE."index.php");
	exit;
}
if(!deftrue("e_DEBUG_MENUMANAGER"))
{
	return;
}
$sql = e107::getDb();
$tp = e107::getParser();
$frm = e107::getForm();
if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$sql->select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql->fetch())
			{
				$sql2 ->update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menük visszaállítása az adatbázisban</b><br /><br />";
		}
}
else
{
	unset($text);
}
$text = "Beállíthatod, hogy mely menük, hol, s milyen sorrendben jelenjenek meg.[br] 
A nyilak segítségével mozgasd a menüket a megfelelő pozícióba. 
[br]
A középen listázott menük inaktívak.[br]Bekapcsolhatod őket, ha megadod, hogy hol jelenjenek meg.[br]Ha úgy tűnik, hogy a menükkel valami nincs rendben, nyomd meg a Frissítés gombot.
[br]
[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('reset','Frissítés','cancel')."</div>
</form>
[br]
".e107::getParser()->toGlyph('search')." jelzi, ha a menü láthatóságát, elérhetőségét módosítottad.
[/html]
";
$text = $tp->toHtml($text, true);
$ns->tablerender("Menü Súgó", $text);
?>