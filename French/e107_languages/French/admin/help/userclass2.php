<?php
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if (!defined('e107_INIT')) { exit; }

$caption = 'Aide groupe utilisateur';

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
	case 'initial' :
	    $text = "Définir les groupes auxquels un nouveau membre du site est affecté au départ.
	    Si vous avez la vérification activée, cet affectation peut prendre effet soit lorsque l'utilisateur s'inscrit, soit lorsque son compte est activé.<br /><br />
	    Et n'oubliez pas que si vous utilisez des groupes hiérachiques d'utilisateurs, un utilisateur est automatiquement un membre de tous les groupes 'au dessus' de chaque groupe sélectionné dans l'arborescence.";
	break;
	case 'options' :
	    $text = "Les options de paramétrage vous permettent de créer et de supprimer la hiérarchie de groupes par défaut. Vous pouvez en voir l'effet en regardant l'arbre utilisateur.<br />
	    Cela ne détruira pas vos autres informations de groupes, et vous pouvez modifier ou supprimer la hiérachie ultérieurement.<br /><br />
	    Il suffira de reconstruire la hiérarchie des groupes en cas de corruption de la base de données.";
	break;
	case 'membs' :
	    $text = "Maintenant sur la page d'administration des utilisateurs";
	break;
	case 'debug' :
	    $text = "Pour utilisateurs avancés uniquement - affiche la hiérarchie des groupes ainsi que les groupes attribués et les groupes auxquels les 20 premiers membres du site ont accès.<br />
	    Le nombre devant le nom de groupe est son ID unique (numéro de référence). Le groupe 'Tout le monde' à ID de 0 (zéro). e107 utilise ces IDs pour se référer aux groupes.<br />
	    Après le nom du groupe se trouve la visibilité et la modification de groupe - [vis:253, edit:27] par exemple. Cela signifie que le groupe sera visible dans la plupart des sélecteurs uniquement si le membre actuel appartient au groupe 253, 
		et que ce membre peut modifier son groupe d'appartenance s'il appartient au groupe 27.<br />
	    Enfin, après le '=', se trouve une liste  de tous les groupes au-dessus ou en dessous de chaque groupe dans l'arborescence, ainsi que l'ID de ce groupe. Ainsi, un utilisateur qui est membre d'un groupe donné sera membre de tous les groupes de cette liste.<br /><br />
	    Pour aider à la compréhension, l'appartenance de groupes des 20 premiers membres s'affiche. La première entrée sur chaque ligne indique les groupes dont l'utilisateur est membre. La 
		deuxième rubrique répertorie tous les groupes dont l'utilisateur est un membre une fois que l'héritage prend effet. La troisième rubrique montre les appartenances de groupes qu'ils peuvent modifier.";
	break;
	case 'test' :
	case 'special' :
	    $text = "Ne pas utiliser !!! Développeurs uniquement !!!
	    ";
	break;
	case 'edit' :
	case 'config' :
	default :
	    $text = "Vous pouvez créer des groupes, ou modifier des groupes existants depuis cette page.<br />
	    Ceci est utile pour restreindre les utilisateurs à certaines parties de votre site. Par exemple, vous pouvez créer un groupe nommé TEST, 
		puis créer un forum où seuls les utilisateurs du groupe TEST ont un accès autorisé.<br /><br />
	    Le nom du groupe est affiché dans les menus déroulants; à certains endroits, la description plus détaillée est également affichée.<br /><br />
	    Si elle est définie, l'icône du groupe peut être affichée en divers endroits du site.<br /><br />
	    Pour permettre aux utilisateurs de déterminer s'ils peuvent être membre d'un groupe, autorisez-les à les gérer. Si vous définissez 'personne' ici, seuls les administrateurs
		peuvent gérer les appartenances de groupe.<br /><br />
	    Le champ 'visibilité' permet de masquer le groupe à la plupart des membres - cela s'applique à certaines listes déroulantes et cases à cocher.<br /><br />
		Le 'groupe parent' vous permet d'établir une hiérarchie de groupes. Si le 'haut' de la hiérarchie est le groupe 'Tout le monde/public' ou 'Membre', les 
		groupes inférieurs et suivants hériteront des mêmes droits. Si le 'haut' de la hiérarchie est le groupe 'Personne', alors les droits sont accumulés dans la direction opposée - un groupe 
		accumule tous les droits d'un groupe 'inférieur' à lui dans l'arborescence. L'arbre qui en résulte est affiché dans la partie inférieure de la page: vous pouvez étendre et 
		contracter des branches en cliquant sur les boites '+' et '-'.";
	break;
	case 'display' :
	default :
		$text = "Vous pouvez sélectionner les groupes pour modification et également supprimer les groupes existants depuis cette page.";
}
e107::getRender() -> tablerender($caption, $text);
