<?php
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if (!defined('e107_INIT')) { exit; }

$caption = "Aide publication article";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';
switch ($action)
{
  case 'create' :
	$text = "<b>Général</b><br />
L'article sera affiché sur la page principale; la suite sera lisible en cliquant sur un lien 'Lire la suite'.
<br />
<br />
<b>Afficher le titre uniquement</b>
<br />
Activez ceci pour n'afficher que le titre de l'article seulement sur la page d'accueil, avec un lien cliquable pour voir la totalité de l'article.
<br /><br />
<b>Activation</b>
<br />
Si vous définissez une date de début et/ou de fin, votre article n'apparaitra qu'entre ces dates.
";
	break;
  case 'cat' :
	$text = "Vous pouvez séparer vos articles selon différentes catégories, et permettre aux visiteurs de n'afficher que les articles de ces catégories. <br /><br />Téléchargez vos images icônes d'article soit dans ".e_THEME."-yourtheme-/images/ ou themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = "Définir différentes options axées sur les articles<br /><br />
	<b>Colonnes catégorie d'article</b><br />
	Nécessite le support du thème pour être sélectionnable<br /><br />
	<b>Articles à afficher par page</b><br />
	Pour la page principale des articles, affiche les éléments dans le format initial.<br /><br />
	<b>Articles à afficher par archive</b><br />
	Définit le nombre d'articles qui sont affichés sous forme de titre uniquement sur chaque page d'articles (inclus dans le total précédent).<br /><br />
	<b>Activer l'éditeur WYSIWYG</b><br />
	Nécessite que les utilisateurs pouvant soumettre des articles puissent aussi publier du HTML.
	";
	break;
  case 'list' :
  default :
	$text = "Liste de tous les articles. Pour modifier ou supprimer, cliquez sur l'une des icônes de la colonne 'options'. Pour afficher l'élément, cliquez sur le titre.";
}
$ns -> tablerender($caption, $text);
