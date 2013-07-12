<?php
$text = "Başka web  Site databankları 'RSS' haber girişlerini sorgulayabilirsiniz, ve sitenizde gösterebilirsiniz. <br /> bunun için databank bağlantısını(URL/Link) giriniz , örnek: http://e107.org/news.xml. Orjinal resimden hoşlanmazsanız, bir resim içinde Bağlantı girebilirsiniz. Şayet bakım yapmanız gerekiyorsa  databank (backend) kapatma imkanınızda bulunmaktadır.<br /><br /> Başlıkların gözükmesi için, Admin sayfasındaki başlıklar gözüksün (headlines_menu) aktif olması gerekmaktedir.";

$ns -> tablerender("Başlıklar", $text);
?>
