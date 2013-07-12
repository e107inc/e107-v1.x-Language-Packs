<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Â©Steve Dunstan 2001-2002
|     http://e107.org
|     jalist@e107.org
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Turkish/admin/help/search.php,v $
|     $Revision: 1.5 $
|     $Date: 2006/01/16 15:06:30 $
|     $Author: sweetas $
|     $Tanslation: Yasin  www.kizilcahamam.de.tt $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Şayet MySql server versionunuz bunu destekliyorsa, siz ozaman  
 daha hıylı olan MySql sort(ayıklama) metodu ile   PHP sort(ayıklama) metodu arasında seçim yapabilirsiniz. Ayarlara bakınız.<br /><br />
Şayet sitenizde  Ideographic languages (dil) içerikli ise, yani Çince yada Japonca ozaman 
 PHP sort metodunu kullanmalısınız ve   whole word matching off  seçmelisiniz.";
$ns -> tablerender("Arama  Zardım", $text);
?>
