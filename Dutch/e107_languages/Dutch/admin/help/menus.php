<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Dutch Language File.
|
|     $URL:$
|     $Revision:$
|     $Date:$
|     $Author: Erje, Yvalni, Tgtje $
+----------------------------------------------------------------------------+
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
			$text = "<b>Menu's hersteld in de database</b><br /><br />";
		}
}
else
{
	unset($text);
}

$frm = e107::getForm();

$text = "Met de Menu-Manager kan je bepalen waar je menu&acute;s zichtbaar zijn binnen je je gebruikte thema. 
[u]Beweeg muis[/u] over de deelgebieden om de instellingen van bestaande menu items te wijzigen. 

Als je niet meteen het resultaat ziet, druk dan even op de onderstaande 'refresh' knop.
[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('reset','Refresh','cancel')."</div>
</form>
<div class='indent'><span class='required'><i class='icon-search icon-white'></i></span> geeft aan dat de zichtbaarheid van een menu is gewijzigd.</div>
[/html]
";

$text = $tp->toHtml($text,true);
$ns -> tablerender("Menu's Hulp", $text);
?>