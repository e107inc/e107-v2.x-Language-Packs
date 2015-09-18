<?php
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
	  $text = "Envoyer un mail avec les contraintes spécifiées par une extension optionnelle.";
	  break;
	case 'debug' :
	  $text = "Pour développeurs uniquement. Non utilisé pour le moment.";
	  break;
	case 'saved' :
	  $text = "Sélectionnez et utilisez un modèle de mail enregistré pour un publipostage. La suppression de n'importe quel modèle n'est plus nécessaire.";
	  break;
	case 'pending' :
	  $text = "Liste des publipostages préparés pour l'envoi, ainsi que l'état d'avancement. La tâche du planificateur de courrier traitera ces mails en tenant compte
	  des premières et dernières dates d'envoi que vous avez définies";
	  break;
	case 'held' :
	  $text = "Liste des mails qui ont été préparés pour l'envoi, mais pas encore publiés.";
	  break;
	case 'sent' :
	  $text = "Liste des publipostages terminés; permet d'afficher les résultas d'envoi.<br />";
	  break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
	  $text = "Créez un mail, donnez-lui un nom significatif et sélectionnez la liste de destinataires. Vous pouvez tout enregistrer comme modèle pour plus tard, ou l'envoyer immédiatement<br />";
	  $text .= "Les adresses mails peuvent être supportées par les extensions (comme la lettre d'actualités) et les doublons sont supprimés lorsque le courrier est envoyé.<br />";
	  $text .= "Toutes les pièces jointes sont sélectionnées dans la liste des téléchargements valides.<br />";
	  $text .= "Le mail peut être envoyé au format texte brut (plus universel et moins de risque d'être classé comme du spam) ou au format HTML (auquel cas, une alternative texte brut est automatiquement générée). Le style de thème
	  peut éventuellement être ajouté au mail. Autrement, un modèle prédéfini peut être sélectionné.<br />";
	break;
	case 'recipients' :
	  $text = "Affiche tous les destinataires ou les potentiels destinataires d'un mail, ainsi que l'état d'avancement";
	  break;
	case 'prefs' :
	  $text = "<b>Configurer les options de publipostage.</b><br />
	  Un mail test est envoyé en utilisant la méthode et les paramètres actuels. Si vous avez des problèmes avec des mails en retour, essayez d'envoyer un mail test à <i>check-auth@verifier.port25.com</i> afin de s'assurer que les enregistrements MX de votre serveur sont corrects. Bien sûr, assurez-vous que votre adresse mail de site est valable avant de procéder à ce test.<br /><br />";
	  $text .= "<b>Méthode de publipostage</b><br />
	  Utilisez SMTP pour envoyer des mails si possible. Les paramètres dépendent du serveur mail de votre hébergeur.<br /><br />";
	  $text .= "<b>Format de mail par défaut</b><br />
	  Les mails peuvent être envoyés au format texte brut ou au format HTML. Ce dernier donne en général une meilleure apparence, mais est plus enclin à être filtré par diverses
	  mesures de sécurité. Si vous sélectionnez HTML, une version distincte au format texte brut est ajoutée.<br /><br />";
	  $text .= "<b>Contrôles d'envoi en nombre</b><br />
	  Les valeurs que vous définissez ici dépendront de votre hébergeur et du nombre de mails que vous envoyez; il est possible de définir toutes les valeurs à zéro afin que la 
	  file d'attente soit vidée presque instantanément. Il est généralement préférable d'envoyer moins de 500 mails par heure.<br /><br />";
	  $text .= "<b>Retours de mails</b><br />
	  Vous pouvez spécifier une adresse mail pour recevoir la réponse en retour lorsqu'un mail n'est pas délivré. Si vous avez le contrôle sur votre serveur, vous pouvez spécifier le 
	  script de traitement automatique indépendant du planificateur; il reçoit les messages en retour comme ils arrivent et met à jour le statut instantanément. Dans le cas contraire, vous pouvez spécifier un compte mail distinct,
	  qui peut être contrôlé périodiquement (en utilisant le planificateur), ou manuellement via le menu des options utilisateur. Normalement, ce sera un compte POP3 standard;
	  N'utilisez les options liées à TLS uniquement si spécifiquement requis par votre hébergeur.<br /><br />";
	  $text .= "<b>Sources adresses mails</b><br />
      Si vous avez des extensions supplémentaires relatives aux mails, vous pouvez choisir laquelle d'entre elles utiliser pour compléter les listes de mails.<br /><br />";
	  $text .= "<b>Journaux</b><br />
      L'option de journalisation crée un fichier texte dans le répertoire du journal système. Ceci doit être supprimé périodiquement. L'option 
	  'journal seulement' vous permet de voir exactement qui recevraient les mails s'ils étaient réellement envoyés. L'option 'avec erreurs' génère une erreur tous les 7 mails, principalement pour les tests";
	  break;
	case 'maint' :
	  $text = "Fonctions de maitenance pour la base de données des mails";
	  break;
	default :
	  $text = "Option non documentée.";
  }

$ns -> tablerender("Aide publipostage", $text);
