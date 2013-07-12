<?php
/*
+-----------------------------------------------------------------------------+
|     Translated by: Sandijs Grīnbergs
|     WWW: http://sandijs.ucoz.lv
|     E-mail: sandijsgrinbergs@gmail.com
+-----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_core.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Kodola faili</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_warning.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Zināmas Nedrošības</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_check.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Kodola Faili (Integrācija Izturēta)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_fail.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Kodola Faili (Integrācija Neizturēta)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_uncalc.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Kodola faili (nenosakāms)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_missing.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Trūkst Kodola Faili</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_old.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Vecie Kodola Faili</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_unknown.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Nav Kodola Failu</div>";
$ns -> tablerender("File Key", $text);

$text = "Failu inspektors skenē un analizē failus uz jūsu vietnes serveri. Kad inspektors sastop
E107 kodols failu, tas pārbauda to failu konsekvenci, lai pārliecinātos, ka tas nav bojāts.";

if ($pref['developer']) {
$text .= "<br /><br />
Papildu stīgu saskaņošanas instruments (attīstītājs režīmā) ļauj skenēt failus uz servera teksta virknes
izmantojot regulāras izteiksmes.Regex dzinēju izmantošana ir PHP <a href='http://php.net/pcre'>PCRE</a>
(the preg_* functions), so enter your query as #pattern#modifiers in the fields provided.";
}

$ns -> tablerender("File Inspector Help", $text);
?>
