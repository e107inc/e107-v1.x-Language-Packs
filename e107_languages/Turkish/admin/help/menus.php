<?php
if(IsSet($_POST['reset'])){
	if(!check_class("FAKE","",TRUE)){
		$text = "<b>Bu sürece izin yok</b><br /><br />";
	} else {
		for($mc=1;$mc<=5;$mc++){
			$sql -> db_Select("menus","*", "menu_location='$mc' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql-> db_Fetch()){
				$sql2 -> db_Update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Databank Menü reset</b><br /><br />";
		}
	}
}else{
	unset($text);
}

$text .= "
Buradan CMS Menülerinizin sıralamasını ve yerini aranje edebilirsiniz.
Menüleriniyi isteidiginiz yere getirmek için Dropdown Menüyü kullanın. Menü pozisyonları ile menun olana dek kaydırmaca  yapabilirsiniz.
<br />
<br />
Şayet görünümün, sizin isteklerinize uygun ayarda gözükmüyorsa (görünüm) güncelleştir buttonuna tıklayın.
<br />
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div><input type='submit' class='button' name='reset' value='Refresh' /></div>
</form>
<br />
<div class='indent'><span style='color:red'>*</span> Menü görünüm değiştirildi</div>
";

$ns -> tablerender("Menüler Yardım", $text);
?>

