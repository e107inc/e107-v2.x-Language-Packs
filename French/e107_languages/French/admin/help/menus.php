<?php
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if(!defined('e107_INIT')){ die("Accès non autorisé");}
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
		$text = "<b>Menus réinitialisés dans la base de données</b><br /><br />";
	}
}
else
{
	unset($text);
}

$frm = e107::getForm();

$text = "Le gestionnaire de menus vous permet de placer et d'organiser vos menus dans votre modèle de thème. 
[u]Survoler[/u] les sous-zones pour modifier des éléments de menus existants. 

Si vous trouvez que les menus ne sont pas mis à jour correctement, cliquez sur le bouton 'Actualiser' ci-dessous pour rafraichir l'affichage.
[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('Réinitialiser','Rafraichir','Annuler')."</div>
</form>
<div class='indent'><span class='required'><i class='icon-search icon-white'></i></span> indique que la visibilité du menu a été modifiée.</div>
[/html]
";

$text = $tp->toHtml($text,true);
$ns -> tablerender('Aide menus ', $text);
