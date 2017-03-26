<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Slovak Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2015/12/09 18:52:31
|
|        $Author: Jimako $
+---------------------------------------------------------------+
*/
define("LWLAN_4", "Nie je definovaný žiadny slovný link.");
define("LWLAN_5", "Slová");
define("LWLAN_6", "odkaz");
define("LWLAN_7", "Aktívne?");
define("LWLAN_11", "Exisujúce slovné linky");
define("LWLAN_18", "Ste si istí, že chcete tento slovný link zmazať?");
define("LWLAN_20", "Nie je možné nájsť tú položku slovného linku.");
define("LWLAN_21", "Slovo pre autolink (alebo čiarkou oddelený zoznam slov)");
define("LWLAN_22", "Aktivovať?");
define("LWLAN_23", "Administrácia slovných linkov");
define("LWLAN_24", "Spravovať slová");
define("LWLAN_26", "Oblasti, v ktorých umožniť slovné linky");
define("LWLAN_27", "This is the 'context' of the displayed text");
define("LWLAN_28", "Stránky, na ktorých je treba znefunkčniť slovné linky");
define("LWLAN_29", "Same format as menu visibility control. One match per line. Specify a partial or complete URL. End with '!' for exact match of the end part of the link");
define("LWLAN_31", "Pridať/upraviť slovný link");
define("LWLAN_33", "Oblasti názvu");
define("LWLAN_34", "Sumár položiek");
define("LWLAN_35", "Telo textu");
define("LWLAN_36", "Popis (linky, atď.)");
define("LWLAN_40", "Užívateľom vložené názvy (napr. fórum)");
define("LWLAN_41", "Užívateľom vložené telo textu (napr. fórum)");
define("LWLAN_50", "Tooltip");
define("LWLAN_51", "Neaktívne");
define("LWLAN_52", "Linkword only");
define("LWLAN_53", "Tooltip only");
define("LWLAN_54", "Linkword and Tooltip");
define("LWLAN_55", "Open link in new window");
define("LWLAN_56", "Open in new page");
define("LWLAN_58", "Pref hook converted to 0.8 format");
define("LWLAN_59", "Enable Ajax functionality");
define("LWLAN_60", "LW ID");
define("LWLAN_62", "Tooltip ID (LW ID)");
define("LWLAN_63", "Positive integers only");
define("LWLAN_64", "Suppress link on current page");
define("LWLAN_65", "When checked, suppresses clickable link if points to current page");
define("LAN_LW_HELP_00", "Linkwords Help");
define("LAN_LW_HELP_01", "<b>Areas to enable</b><br /> many areas of text have an associated \"context\", and linkwords will only be displayed in areas matching that context.<br /><br /> <b>Linkwords Disable</b><br /> Linkwords may be disabled on specific pages, or pages matching a pattern. Enter these here (same syntax as for menus), one pattern per line. If the pattern ends in \"!\", this corresponds to \"end of query\", and is usually an exact match. Otherwise any URL containing the specified string will match.<br /> Note that linkwords are <i>never</i> displayed on admin pages.<br /><br /> <b>Enable Ajax Functionality</b><br /> The tooltips can use Ajax to get information for display. This usually requires some custom coding.<br /><br /> <b>Suppress link on current page</b><br /> Usually its pointless for the user to be able to click a link if they\"re already on the page. Tick this box to remove the option,<br />");
define("LAN_LW_HELP_02", "Define the words which become clickable links, or which display text on mouseover, here<br /><br /> <b><u>Word to Link</u></b><br /> This is case-insensitive. For multiple words mapping to the same links and tooltips, separate them with commas (no spaces)<br /><br /> <b><u>Link</u></b><br /> Define a clickable link here. If its an external link, it [i]must[/i] begin \"http://\". If its a link within this site, the normal {e_XXX} constants may be used.<br /><br /> <b><u>Tooltip</u></b><br /> This defines the text to be displayed when the user\"s mouse passes over the word.<br /><br /> <b><u>LW ID (Tooltip ID)</u></b><br /><br /> This defines an optional numeric ID to be used with Ajax processing. If blank, the database record number is used.<br /><br /> <b><u>Activate?</u></b><br /> Defines which options are active.");


?>