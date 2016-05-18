<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Hungarian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2016/04/22 13:08:21
|
|        $Author: Yesszus $
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "A rendszer E-mail értesítést küld, ha valamilyen e107 esemény történik. <br /> <br />
Például, ha egy 'IP tiltás flood miatt' biztonsági esemény történik a beállított felhasználói csoportnak, vagy 'Fő Adminnak' e-mail értesítést 
küld a rendszer.<br /><br />
Egy másik példa: a 'Hírt beküldte' eseményhez beállítjuk hogy egy felhasználói csoport, vagy a 'Fő Admin' e-mail 
értesítést kap az eseményről<br /><br />
Ha szeretné hogy az e-mail értesítés egy másik e-mail címre érkezzen mint a választható csoportok címei - válassza ki az 'E-mail' opciót, 
és írja be a megfelelő e-mail címet a mezőbe.";

$ns -> tablerender("Értesítés Súgó", $text);
