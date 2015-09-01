<?php

// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

define("LANINS_001", "e107 Installation");
define("LANINS_002", "Étape");
define("LANINS_003", "1");
define("LANINS_004", "Sélection de la langue");
define("LANINS_005", "Veuillez choisir la langue à utiliser pendant l'installation");
define("LANINS_007", "4");
define("LANINS_008", "PHP et MySQL Versions Check / vérification des autorisations de fichiers");
define("LANINS_009", "Testez à nouveau des autorisations de fichier");
define("LANINS_010", "Fichier non accessible en écriture :");
define("LANINS_010a", "Dossier non accessible en écriture :");
define("LANINS_012", "Fonctions MySQL ne semblent pas exister. Cela signifie probablement que l'Extension de PHP MySQL n'est pas installée ou que votre installation de PHP n'a pas été compilée avec le support MySQL.");
define("LANINS_013", "Ne pouvait pas déterminer le numéro de votre version de MySQL. C'est une erreur non fatale, alors s'il vous plaît continuer l'installation, mais sachez qu'e107 requiert MySQL > = 3.23 pour fonctionner correctement.");
define("LANINS_014", "Autorisations de fichiers");
define("LANINS_015", "Version de PHP");
define("LANINS_017", "PASS");
define("LANINS_018", "S'assurer que tous les fichiers répertoriés existent et sont accessibles en écriture par le serveur. Cela implique normalement CHMODing 777 eux, mais les environnements varient - contacter votre hôte si vous avez des problèmes.");
define("LANINS_019", "La version de PHP installé sur votre serveur n'est pas capable de courir d'e107. e107 nécessite une version PHP d'au moins ". MIN_PHP_VERSION. " pour s'exécuter correctement. Mettre à niveau votre version PHP, ou contacter votre hébergeur pour une mise à niveau.");
define("LANINS_021", "2");
define("LANINS_022", "Détails du serveur MySQL");
define("LANINS_023", "Veuillez entrer vos paramètres MySQL ici.

Si vous avez les permissions root, vous pouvez créer une nouvelle base de données en cochant la case, si non, vous devez créer une base de données ou utiliser un préexistant.

Si vous n'avez qu'une seule base de données utilisent un préfixe afin que les autres scripts peuvent partager la même base de données.
Si vous ne connaissez pas que vos données MySQL contactent votre hébergeur.");
define("LANINS_024", "Serveur MySQL :");
define("LANINS_025", "Nom d'utilisateur MySQL :");
define("LANINS_026", "Mot de passe MySQL :");
define("LANINS_027", "Base de données MySQL :");
define("LANINS_028", "Créer la base de données ?");
define("LANINS_029", "Préfixe de table :");
define("LANINS_030", "Le serveur MySQL, vous aimeriez e107 à utiliser. Il peut également inclure un numéro de port. par exemple 'hostname: port' ou un chemin d'accès à un local socket par exemple \":/path/to/socket\" pour l'hôte local.");
define("LANINS_031", "Le nom d'utilisateur que vous souhaitez e107 utiliser pour vous connecter à votre serveur MySQL");
define("LANINS_032", "Le mot de passe pour l'utilisateur que vous venez d'entrer. Doit pas contenir de guillemets simples ou doubles.");
define("LANINS_033", "La base de données MySQL vous désirez e107 résider dans, parfois dénommé un schéma. Doit commencer par une lettre. Si l'utilisateur a base de données de créer des autorisations, que vous pouvez opter pour créer la base de données automatiquement si il n'existe pas déjà.");
define("LANINS_034", "Le préfixe souhaité e107 à utiliser pour créer les tableaux d'e107. Utile pour des installations multiples d'e107 dans le schéma d'une base de données.");
define("LANINS_036", "3");
define("LANINS_037", "Vérification de connexion MySQL");
define("LANINS_038", "Création des bases de données");
define("LANINS_039", "S'il vous plaît assurez-vous que vous remplissez tous les champs, surtout, serveur MySQL, MySQL Username et base de données MySQL (ceux-ci sont toujours requis par le serveur MySQL)");
define("LANINS_040", "Erreurs");
define("LANINS_041", "e107 n'a pas pu établir une connexion au serveur MySQL en utilisant les informations que vous avez entré. S'il vous plaît revenir à la dernière page et s'assurer que les informations sont correctes.");
define("LANINS_042", "Connexion au serveur MySQL établies et vérifiées.");
define("LANINS_043", "Impossible de créer la base de données, veuillez vous assurer que vous avez les autorisations appropriées pour créer des bases de données sur votre serveur.");
define("LANINS_044", "Créé avec succès la base de données.");
define("LANINS_045", "Veuillez cliquer sur le bouton pour passer à l'étape suivante.");
define("LANINS_046", "5");
define("LANINS_047", "Détails de l'administrateur");
define("LANINS_049", "Les deux mots de passe que vous avez entré ne sont pas les mêmes. Veuillez revenir en arrière et essayer de nouveau.");
define("LANINS_050", "Extension XML");
define("LANINS_051", "Installé");
define("LANINS_052", "Pas installé");
define("LANINS_053", "e107 v2.x nécessite l'Extension XML de PHP à installer. S'il vous plaît contacter votre hôte ou lire les informations sur [link = http://php.net/manual/en/ref.xml.php] php.net[/link] avant de continuer");
define("LANINS_055", "Installer la Confirmation");
define("LANINS_056", "6");
define("LANINS_057", "e107 a maintenant toutes les informations nécessaires terminer l'installation.

S'il vous plaît cliquez sur le bouton pour créer les tables de base de données et d'enregistrer tous vos paramètres.");
define("LANINS_058", "7");
define("LANINS_060", "Impossible de lire le code sql datafile s'il vous plaît s'assurer que le fichier [b]core_sql.php[/b] existe dans le répertoire/sql [/ b] [b] / e107_core /.");
define("LANINS_061", "e107 n'a pas pu créer toutes les tables de base de données requise.
Veuillez effacer la base de données et corriger les problèmes avant de réessayer.");
define("LANINS_062", "[b] Bienvenue sur votre nouveau site ! [/ b] e107 a installé avec succès et est maintenant prêt à accepter le contenu.

Votre section de l'administration est [link=e107_admin/admin.php]located ici [/link], cliquez pour y aller maintenant. Vous aurez à vous connecter en utilisant le nom et le mot de passe indiqué pendant le processus d'installation.

[b] Page d'accueil de soutien [/ b] e107: [link = http://e107.org] http://e107.org [/link], vous trouverez les FAQ et documentation ici.
Forums: [link = http://e107.org/e107_plugins/forum/forum.php] http://e107.org/e107_plugins/forum/forum.php [/link] Plugin Developer Community: [lien = http://www.e107coders.org] http://e107coders.org [/link] [b] téléchargements [/ b] Plugins: [lien = http://plugins.e107.org] http://plugins.e107.org [/link] thèmes: [link = http://themes.e107.org] http://themes.e107.org [/link] Merci pour essayer e107, nous espérons qu'ils répondent à vos besoins de site Web.
(Vous pouvez supprimer ce message dans votre section admin.)");
define("LANINS_069", "e107 a été installé avec succès !

Pour des raisons de sécurité, vous devez maintenant définir les permissions du fichier sur le fichier [b]e107_config.php[/b] Retour à 644.

Aussi s'il vous plaît supprimer install.php depuis votre serveur après que vous avez cliqué sur le bouton ci-dessous.");
define("LANINS_070", "e107 n'a pas pu enregistrer le fichier de configuration principal sur votre serveur.

Veuillez vous assurer que le fichier [b]e107_config.php[/b] dispose des autorisations appropriées");
define("LANINS_071", "Installation complète");
define("LANINS_072", "Nom d'utilisateur admin");
define("LANINS_073", "C'est le nom que vous utiliserez pour vous connecter au site. Si vous souhaitez utiliser comme votre surnom aussi");
define("LANINS_074", "Nom complet de l'admin");
define("LANINS_076", "Mot de passe admin");
define("LANINS_077", "Veuillez saisir le mot de passe admin que vous souhaitez utiliser ici");
define("LANINS_078", "Confirmation de mot de passe admin");
define("LANINS_079", "Veuillez saisir le mot de passe admin à nouveau pour confirmation");
define("LANINS_080", "E-mail de l'admin");
define("LANINS_081", "Entrez votre adresse e-mail");
define("LANINS_083", "MySQL a signalé une erreur :");
define("LANINS_084", "Le programme d'installation n'a pas pu établir une connexion à la base de données");
define("LANINS_085", "Le programme d'installation ne pouvait pas sélectionnez base de données :");
define("LANINS_086", "Admin Username, le mot de passe Admin et Admin Email sont [b] [/ b] champs obligatoires. S'il vous plaît revenir à la dernière page et s'assurer que l'information est correctement inscrite.");
define("LANINS_105", "Un début de nom ou préfixe de base de données avec quelques chiffres suivi de « e » ou « E » n'est pas acceptable");
define("LANINS_106", "AVERTISSEMENT - e107 impossible d'écrire dans les répertoires et/ou des fichiers répertoriés. Bien que cela ne s'arrêtera pas installer e107, cela signifiera que certaines fonctionnalités ne sont pas disponibles.
				Vous devez modifier les autorisations de fichier pour utiliser ces fonctionnalités");
define("LANINS_107", "Nom du site Web");
define("LANINS_108", "Mon site Web");
define("LANINS_109", "Thème de site Web");
define("LANINS_111", "Inclure le contenu/Configuration");
define("LANINS_112", "Rapidement reproduire l'apparence de l'aperçu du thème ou de la démo. (Si disponible)");
define("LANINS_113", "Veuillez entrer un nom de site Web");
define("LANINS_114", "Veuillez sélectionner un thème");
define("LANINS_115", "Nom du thème");
define("LANINS_116", "Type de thème");
define("LANINS_117", "Préférences de site Web");
define("LANINS_118", "Installer des Plugins");
define("LANINS_119", "Installer tous les plugins qui peut-être nécessiter le thème.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php n'est pas un fichier vide");
define("LANINS_122", "Vous pourriez avoir une installation existante");
define("LANINS_123", "En option : Votre public nom ou alias. Laissez vide pour utiliser le nom d'utilisateur");
define("LANINS_124", "Veuillez choisir un mot de passe d'au moins 8 caractères");
define("LANINS_125", "e107 a été installé avec succès !");
define("LANINS_126", "Pour des raisons de sécurité vous devez maintenant définir les permissions du fichier sur le fichier e107_config.php vers 644.");
define("LANINS_127", "La base de données [x] existe déjà. L'écraser ? (toutes les données seront perdues)");
define("LANINS_128", "Écraser");
define("LANINS_129", "Base de données introuvable.");
