<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     Copyright (C) 2001-2002 Steve Dunstan (jalist@e107.org)
|     Copyright (C) 2008-2010 e107 Inc (e107.org)
|
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_languages/Japanese/admin/help/administrator.php $
|     $Revision: 11678 $
|     $Id: administrator.php 11678 2010-08-22 00:43:45Z e107coders $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "サイト管理者ヘルプ";
$text = "プリファレンスを編集するには、このページを使用するか、サイト管理者を削除します。 管理者は、チェックされている機能にアクセスするための権限を持つことになります。<br /><br />
新しい管理者を作成するには、ユーザー設定ページに移動し、管理状態への既存ユーザを更新します。";
$ns -> tablerender($caption, $text);
?>
