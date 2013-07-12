<?php
$caption = "Kullanıcıyı Sitenizden uzaklaştırma (BANlama)";
$text = "Bu Menü üzerinden kullanıcıları sitenizden uzaklaştırabilirsiniz (BAN).<br />
Ya bir kişi için IP adresiniz girerek , yada birçok kişiyi (wildcard) rastgele BANlıyabilirsiniz. Yada belli E.Mail adreslerini girerek istemediğiniz kişilerin sitenize kayıt  olmasını engelleyebilirsiniz.<br /><br />
<b> IP-Addresi Üzeri BANlama:</b><br />
Örnek olarak mesela 123.123.123.123 IP-Addresini verirseniz , bu IP kullanan kişiler yasaklanır (BANlanır).<br />
Ama siz şimdi  123.123.123.* IP-Adresini  verirseniz, ozaman sonu 000 - 999 ile biten tüm  IP adresi kullanıcıları BANlanır. Yanı bir kaç değişik kullanıcı yasaklanmış olacak.<br /><br />
<b>E-Mail Adresi  üzeri BANlama:</b><br />
Mesela  name@email.de adresini verirseniz, ozaman bu E-Mail adresinini kullanan kişi sitenize kayıt olması engellenmiş olur. Bu genellikle bir kişi yada bir gruba ait kayıt yapmaya çalışan ekip olabilir.<br />
Şayet şimdi  *@email.de adresini girerseniz, ozaman bu domaine ait emaili olan KİMSE kayıt olamaz! O yüzden yasaklama işleminde dikkatlı olunuz!.";
$ns -> tablerender($caption, $text);
?>
