<?php
$text = "Bu Menü üzerinden,  Kendinize özel sayfalar ve Menüler  yapabilirsiniz.<br /><br />
<b>Önemli Bilgi!</b><br />
- Bu Extraları kullanabilmek için  /e107_plugins/custom/ ve /e107_plugins/custompages/ dosyası yetkisini  CHMOD  777 yapmalısınız.
<br />
- Bunun için HTML Kodlamalarınıda kullanabilirsiniz. Dikkat edeceniğiz önemli konu, ( " )  yerine ( ' ) kullanmanızdır !! . "/  kullandığınız taktirde mizampajda hata oluşacaktır!
<br /><br />
<i>Menü/Sayfa-Dosya ismi</i>: Yaptığınız Menü ve sayfalar ".e_PLUGIN."custom/ Klasöründe  'Sitenname.php' olarak kayıt olacaktır.<br />
Sayfa kendisi ".e_PLUGIN."custompages/ Klasöründeki Sitename.php dosyasına kayıt olacaktır<br /><br />
<i>Menü/Sayfa Başlığı<i/>: Yazı Metni, Başlık olarak Menüler ve Sayfa başlığında gösterilecektir.<br /><br />
<i>Menü/Sayfa yazısı(içeriği)</I>: Sizin girmiş olduğunuz bilgiler, ya 'BODY' bölgesine yada normal yazı olarak verilecektir. cağırmak için herseferinde, class2.php,   HEADER ve FOOTERE, satırları eklemenize gerek yoktur.Bu satırlar otomatikman eklenecektir.<br /> Yinede sayafanızda değişilikler yapmak isterseniz, bunu CSS Stylesheet üzerinden sınıflandırarak sayfanızın değişik görünmesini sağlıyabilirsiniz.";
$ns -> tablerender(CUSLAN_18, $text);
?>
