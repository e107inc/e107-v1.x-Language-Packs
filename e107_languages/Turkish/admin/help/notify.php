<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     ©Steve Dunstan 2001-2002
|     http://e107.org
|     jalist@e107.org
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Turkish/admin/help/notify.php,v $
|     $Revision: 1.2 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
|     $Tanslation: Yasin  www.kizilcahamam.de.tt $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Notify/hatırlatıcı 107 de girilmiş olan olayları hatırlatmak için size email yollar.<br /><br />
ÖÖrnek olarak:, şayet  'IP banned for flooding site' SEL/ FLOOD Güvelik ayarı açıkken, sitenize Flood / coğul  saldırı olursa,'Admin' ve tüm  Admins sınıfındaki üyelere email gönderilecektir.<br /><br />
Başka bir örnek olarak  'News item posted by admin= admin tarafından haber yollandı' ayarını 'üyelerinize' ve kullanıcılarınıza açarsanız, ozaman haber yolladığınız taktirce, onlara otomatikman email yollanacaktır.<br /><br />
Şayet email Notifcation/Hatırlatmayı  alternatif olarak başka bir email adresine yollamak istiyorsanız - ozaman 'Email' opsiyonunu seçip yollamak istediğiniz email adresini giriniz.";

$ns -> tablerender("Notify/hatırlatıcı Yardım", $text);
?>