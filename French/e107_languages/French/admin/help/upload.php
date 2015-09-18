<?php
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan
 
if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
    case 'filetypes' :
        $text = "Les types de fichiers et la taille maximale de fichier qui peut être téléchargé sont définis par groupes. Cette option génère un fichier appelé ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.", 
		qui doit être copié ou déplacé vers le répertoire ".e_ADMIN_ABS." et renommé en ".e_READ_FILETYPES." avant d'être utilisable.<br />
        Une définition par groupe est autorisée.<br />
        Notez que ces définitions s'applique à l'échelle du site, même si les téléchargements publiques sont désactivés.";
    break;
    case 'options' :
        $text = "Le système complet de téléchargements publiques peut être désactivé ici.<br />
        Le type de stockage fichier est généralement approprié (sinon la taille maximale de fichier est physiquement limitée à 500Ko).<br />
        La taille maximale de fichier remplace toute définition située dans filetypes.xml.<br />
        Les téléchargements publiques peuvent être limités à un groupe particulier, mais ces paramètres s'appliquent également à d'autres zones du site où les téléchargement peuvent être autorisés, tels que les 
		articles et les formulaires.";
    break;
    case 'view' :
    default :
        $text = "Cette page répertorie les téléchargements soumis. Vous pouvez choisir de les supprimer, les transférer vers les téléchargements acceptés ou les publier en articles.";
}

$ns -> tablerender('Aide téléchargements publiques', $text);
