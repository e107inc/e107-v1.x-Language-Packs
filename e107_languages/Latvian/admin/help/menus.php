<?php
/*
+-----------------------------------------------------------------------------+
|     Translated by: Sandijs Grīnbergs
|     WWW: http://sandijs.ucoz.lv
|     E-mail: sandijsgrinbergs@gmail.com
+-----------------------------------------------------------------------------+
*/

if(!defined('e107_INIT')){ die("Unauthorised Access");}
if (!getperms("2")) {
	header("location:".e_BASE."index.php");
	 exit;
}
global $sql;
if(isset($_POST['reset'])){
		for($mc=1;$mc<=5;$mc++){
			$sql -> db_Select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql-> db_Fetch()){
				$sql2 -> db_Update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menus reset in database</b><br /><br />";
		}
}else{
	unset($text);
}

$text .= "
Jūs varat sakārtot, kur un kādā secībā jūsu izvēlnes elementi ir no šejienes.
Izmantojiet nolaižamo izvēlni, lai pārvietotos pa izvēlnēm uz augšu un uz leju, līdz esat apmierināts ar viņu novietojumu.
<br />
<br />
Ja jūs atradīsiet izvēlnes tiek neatjaunina pareizi, noklikšķiniet uz atsvaidzināšanas pogas.
<br />
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div><input type='submit' class='button' name='reset' value='Refresh' /></div>
</form>
<br />
<div class='indent'><span style='color:red'>*</span> norāda izvēlne redzamība ir mainīta</div>
";

$ns -> tablerender("Menus Help", $text);
?>