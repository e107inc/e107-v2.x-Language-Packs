<?php
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if (!defined('e107_INIT')) { exit; }

$caption = "Aide journaux système";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Filtres de données</b><br />
  Vous pouvez spécifier divers filtres diminuant le nombre de données à afficher. Elles sont enregistrées dans un cookie jusqu'à ce que vous vous déconnectiez.<br />
  Les filtres date/heure de début et fin doivent être activés par leurs cases à cocher respectives.<br />
  Les autres filtres sont actifs lorsqu'une valeur est saisie.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Cette page affiche l'activité de l'utilisateur que vous avez choisi de suivre.";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Cette page configure diverses options des journaux système.<br /><br />
  <b>Paramètres communs</b><br />
  Définir le nombre de lignes à afficher dans le journal.<br /><br />
  <b>Journal administrateur</b><br />
  Ce journal conserve les évènements tant qu'ils ne sont pas spécifiquement supprimés; Utilisez cette option pour supprimer les anciens évènements.<br /><br />
  <b>Journal audit utilisateurs</b><br />
  Ce journal enregistre les activités des utilisateurs. Pour les membres inscrits, seuls ceux du groupe spécifié sont suivis - vous pouvez soit utiliser le groupe 'Membres'pour suivre
  tout le monde, soit crééer un groupe spécifique à suivre. Vous déterminez ensuite les types d'activité que vous souhaitez enregistrer.<br />
  Les évènements d'inscriptions peuvent être suivis séparément.<br /><br />
  <b>Journal circulaire</b><br />
  Ce journal est utilisé pour suivre des évènements anormaux et offre une aide au débogage. Il peut être désactivé. Les évènements sont automatiquement supprimés après le nombre de jours défini.
  ";
  break;
case 'rolllog' :
  $text = "Le journal circulaire affiche divers évènements anormaux qui ne sont pas enregistrés autrement. Il peut également servir au suivi et débogage de code<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Cette page affiche les téléchargements des utilisateurs.";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Cette page affiche les commentaires des utilisateurs, avec des options pour les sélectionner par ID, type et date. Les commentaires indésirables peuvent être supprimés.";
  break;
case 'detailed' :
  $text = "Les journaux du système principal enregistre l'heure à un haut degré de précision (si le serveur sous-jacent le permet), et cette page vous permet d'inspecter les entrées survenant
  dans une fenêtre de temps relativement petite. Les entrées des journaux administrateur, audit et circulaire sont fusionnées afin que vous puissiez visualiser les relations précises entre les évènements.";
  break;
case 'adminlog' :
default :
  $text = "Cette page affiche l'activité de l'administrateur.<br /><br />
  (Actuellement la journalisation est encore ajoutée au code, aussi la liste est incomplète.";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
