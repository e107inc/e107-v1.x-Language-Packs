<?php
/*
+-----------------------------------------------------------------------------+
|     Translated by: Sandijs Grīnbergs
|     WWW: http://sandijs.ucoz.lv
|     E-mail: sandijsgrinbergs@gmail.com
+-----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Bloķēt Lietotaju Jūsu Saitē";
$text = "Jūs varat aizliegt lietotājus no jūsu vietā šajā ekrānā <br />.
Nu ievadīt viņu pilnu IP adresi vai izmantojiet zvaigznīti aizliegt virkni IP adresēm. Jūs varat arī ievadīt e-pasta adresi, lai apturētu lietotāju Reģistrējot par biedru jūsu vietnē. <br /> <br />
<b> aizliegšana ar IP adresi: </ b> <br />
Ievadot IP adresi 123.123.123.123 tiks pārtraukta lietotāju ar šo adresi apmeklē jūsu vietni <br />.
Ievadot IP adresi ar vienu vai vairākiem aizstājējzīmes gala blokiem, piemēram 123.123.123. * Vai 214.098. *. *, Pārtrauks ikviens šajā IP adrešu apmeklēt jūsu
vietā. (Ievērojiet, ka jābūt tieši četrām ciparu grupām vai zvaigznītes) <br /> <br />
<b> aizliegšana ar e-pasta adresi </ b> <br />
Ievadot e-pasta adresi foo@bar.com pārtrauks ikviens, kas izmanto šo e-pasta adresi reģistrēt kā dalībniekam uz jūsu vietni. <br />
Ievadot e-pasta adrese * @ bar.com pārtrauks ikviens, kas izmanto šo e-pasta domēnu reģistrēt par biedru jūsu vietnē. <br /> <br />
<b> Banning ar lietotāja vārdu </ b> <br />
Tas tiek darīts no lietotāja administrācijas lapā.";
$ns -> tablerender($caption, $text);
?>