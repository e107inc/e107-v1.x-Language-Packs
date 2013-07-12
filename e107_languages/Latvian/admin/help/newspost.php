<?php
/*
+-----------------------------------------------------------------------------+
|     Translated by: Sandijs Grīnbergs
|     WWW: http://sandijs.ucoz.lv
|     E-mail: sandijsgrinbergs@gmail.com
+-----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Jauno Pastu Palīdzība";
$text = "<b>Vispārēji</b><br />
Ķermenis tiks parādīts galvenajā lapā; pagarināts būs lasāma, noklikšķinot 'Lasīt vairāk' saites.
<br />
<br />
<b>Rādīt nosaukums tikai</b>
<br />
Lai tas parādītu ziņu virsrakstu tikai pirmajā lapā, ar klikšķināmos saites uz pilnu stāsts.
<br /> <br />
<b>Aktivizācijas</b>
<br />
Ja iestatāt sākuma un / vai beigu datumu jūsu Ziņa būs tikai redzams starp šiem datumiem.
";
$ns -> tablerender($caption, $text);
?>