<?php
// Bing-Translated Language file 
// Generated for e107 v2.x by the Multi-Language Plugin
// https://github.com/e107inc/multilan

if (!defined('e107_INIT')) { exit; }
if (ET_e107_Version_7 === true)
{
    $fileinspectorIMode = e_IMAGE;
}
else
{
    global $imode;
    $fileinspectorIMode = e_IMAGE.'packs/'.$imode.'/';
}

$text = "<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_core.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Fichier du noyau</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_warning.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Insécurité connue</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_check.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Fichier du noyau (Intégrité passée)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_fail.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Fichier du noyau (Intégrité échouée)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_uncalc.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Fichier du noyau (non calculable)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_missing.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Fichier du noyau manquant</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_old.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Ancien fichier du noyau</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_unknown.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Fichier non reconnu du noyau</div>";

$ns -> tablerender('Description des symboles utilisés', $text);

$text = "L'inspecteur de fichier scanne et analyse les fichiers sur votre serveur de sites. Lorsque l'inspecteur de fichier rencontre 
un fichier du noyau e107, il vérifie son intégrité afin de s'assurer qu'il n'est pas corrompu.";

$text .= "<br /><br />
<a href='".e_SELF."?create'>Cliquez ici pour créer un instantanné de vos propres fichiers d'extensions pour utilisation dans l'inspecteur de fichier</a>";

if ($pref['developer'])
{
    $text .= "<br /><br />
    L'outil additionnel de recherche de chaînes de concordance (mode développeur uniquement) vous permet de scanner les fichiers de votre serveur pour des chaînes de texte 
	à l'aide d'expressions régulières. Le moteur regex utilisé est de PHP <a href='http://php.net/pcre'>PCRE</a> 
	(les fonctions preg_*), alors entrez votre requête comme #modèle# modificateurs dans les champs fournis.";
}

$ns -> tablerender("Aide inspecteur de fichier", $text);
