<?php
/*
+-----------------------------------------------------------------------------+
|     Translated by: Sandijs Grīnbergs
|     WWW: http://sandijs.ucoz.lv
|     E-mail: sandijsgrinbergs@gmail.com
+-----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Ja jūsu MySQL serveris versija atbalsta to jūs varat pārslēgties
MySQL izkārtošanas metodi, kas ir ātrāk nekā PHP šķirošanas metodi. Skatīt preferences. <br /> <br />
Ja jūsu vietne ietver ideogrāfisks valodas, piemēram, ķīniešu un japāņu jums ir
izmantot PHP kārtošanas metodi un pāriet visu vārdu atbilstošas izslēgtu.";
$ns -> tablerender("Search Help", $text);
?>