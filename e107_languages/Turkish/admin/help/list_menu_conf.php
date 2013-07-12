<?php
$text = "Bu Bölümde 3 Menüyü ayarlıyabilirsiniz.<br />
<b>Menü Yeni Makale </b> <br>
Lütfen bir rakkam giriniz, mesela '5' rakkamını  birinci alana giriniz. Bunun neticesi olarak sadece ilk '5' Makalenin gösterilmesi olacaktır. Alanı boş bıraktığınız taktirde, tümü gözükecektir. İsterseniz bağlantıyı girip, Makalenin devamına gidebilirsiniz. İkinci Alana, örnek olarak 'Tüm makaleler'. Alanı boş bıraktığınız takdirde Bağlantı oluşturulmayacaktır.<br />
<b>Forum Menüsünde Yorumlar</b><br />
standart ayar  #5 olarak yapılmıştır. Gösterilecek harf adeti standart olarak  10.000 dir! uzun satırları önlemek için  yapılan bir  ayardır. satırın kesiminin iyi gözükmesi için  '...' olarak bitirin. Nasıl gözüktüğünü görmek için orjinal metne bakın.<br />";
$ns -> tablerender("Menü Ayar Yardım", $text);
?>
