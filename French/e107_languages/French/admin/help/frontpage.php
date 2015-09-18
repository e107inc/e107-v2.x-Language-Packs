<?php 
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if (!defined('e107_INIT')) { exit; }

$caption = "Aide page d'accueil";
$text = "
<p>
Sur cet écran, vous pouvez choisir ce qu'il faut afficher comme page d'accueil de votre site, par défaut ce sont les articles. Vous pouvez également déterminer si 
les utilisateurs sont redirigés vers une page particulière après la connexion.
</p>
<p>
Les règles sont scannées dans l'ordre, afin de trouver la première pour laquelle l'utilisateur actuel appartient au groupe spécifié dans la règle.
Cette règle détermine ensuite la page d'accueil et n'importe quelle page spécifique d'après connexion. Si aucune règle ne correspond, news.php est définie comme page d'accueil.
</p>
<p>
L'utilisateur est dirigé vers la page spécifiée d'après connexion (si spécifié) immédiatement après connexion.
</p>
";

$ns -> tablerender($caption, $text, 'admin_help');
