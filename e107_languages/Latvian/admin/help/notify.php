<?php
/*
+-----------------------------------------------------------------------------+
|     Translated by: Sandijs Grīnbergs
|     WWW: http://sandijs.ucoz.lv
|     E-mail: sandijsgrinbergs@gmail.com
+-----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Paziņošanas nosūta e-pasta paziņojumus, kad E107 notikumi. <br /> <br />
Piemēram, kopu 'IP aizliegta plūdi portāla lietotāju klase 'admin' un viss admins tiks nosūtīta e-pastu, kad jūsu
vieta tiek pārpludināts. <br /> <br />
Jūs varat arī, kā vēl viens piemērs, kopu 'News Item posted by admin, 'lai lietotāja klasē' dalībnieku un visas jūsu lietotājiem būs
nosūtītās ziņas vienumi izlikt vietas e-pastu. <br /> <br />
Ja jūs vēlētos, lai e-pasta paziņojumi, kas nosūtīti uz alternatīvu e-pasta adresi - izvēlieties 'Nosūtīt' un
ievadiet e-pasta adresi paredzētajā laukā.";

$ns -> tablerender("Notify Help", $text);
?>