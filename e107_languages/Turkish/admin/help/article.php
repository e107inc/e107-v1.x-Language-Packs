<?php
$text = "Bu sayfa üzerinden Tekil yada çoğul Makale oluşturabilirsiniz.<br />
 Çok sayafalı makale kullanmak için her sayafayı bir BBCode ile ayırmalısınız. <br />
 Bunun için lütfen SADECE ! bu TAG kullanın: [newpage], Örnek olarak: <br />
 <code>TestSayfa 1 [newpage] Test sayfa 2</code><br /> Böyle bir yazı metni olan İki sayfalık bir Makale yazmak  için 1. sayfaya:<br />
 'Test sayfa 1' ve devam eden 2. sayfa iceriği: <br />
 'Test sayfa 2'.
<br /><br />
Şayet HTML Taglar içeren  bir makaleyi kullanmak istiyorsanız, ozaman bu Tagları  bu Kodlarla cevrelemelisiniz: [html] [/html].<br />
Örnek olarak bu yazıyı verdik: '&lt;table>&lt;tr>&lt;td>Hallo Text &lt;/td>&lt;/tr>&lt;/table>' Şimdi sizin makalenizde icinde Hallo Text diye bir Tablo oluşur.<br />
Ama siz şimdi şöyle yazarsanız '[html]&lt;table>&lt;tr>&lt;td>Hello Text &lt;/td>&lt;/tr>&lt;/table>[/html]' , ozaman Kodlarla (code)üretilen tablo olarak değilde, sizin yazdığınız Kod (code)  gibi gözükür.";
$ns -> tablerender("Makale  Yardım", $text);
?>
