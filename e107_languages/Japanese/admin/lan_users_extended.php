<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_languages/Japanese/admin/lan_users_extended.php $
|     $Id: lan_users_extended.php 12306 2011-07-06 13:43:10Z secretr $
+----------------------------------------------------------------------------+
*/
define("EXTLAN_1", "名前");
define("EXTLAN_2", "プレビュー");
define("EXTLAN_3", "価値");
define("EXTLAN_4", "Req'd");
define("EXTLAN_5", "適用");
define("EXTLAN_6", "読むアクセス権");
define("EXTLAN_7", "書き込みアクセス権");
define("EXTLAN_8", "アクション");
define("EXTLAN_9", "拡張ユーザーフィールド");
define("EXTLAN_10", "フィールド名");
define("EXTLAN_11", "これは、テーブルに格納されているフィールドの名前であり、それは他から一意でなければなりません、メインユーザーテーブルでは使用しないでください。");
define("EXTLAN_12", "フィールドテキスト");
define("EXTLAN_13", "レンダリングされたページ内のフィールドに表示された名前です。");
define("EXTLAN_14", "フィールドタイプ");
define("EXTLAN_15", "フィールドにはテキストを含む");
define("EXTLAN_16", "デフォルト値");
define("EXTLAN_17", "Enter each possible value on each line <br /> For DB table see help.");
define("EXTLAN_18", "必須");
define("EXTLAN_19", "それらの設定を更新する際にユーザーがこのフィールドに値を入力する必要があります。");
define("EXTLAN_20", "このフィールドが適用されるユーザーが決定します。");
define("EXTLAN_21", "This will determine who will see this field in their usersettings.");
define("EXTLAN_22", "This will determine who can see the value in the user page <br />NOTE: Setting this to 'Read Only' will make it visible to Admin and the member only.");
define("EXTLAN_23", "拡張フィールドを追加");
define("EXTLAN_24", "拡張フィールドを更新");
define("EXTLAN_25", "下に移動");
define("EXTLAN_26", "上に移動");
define("EXTLAN_27", "削除の確認");
define("EXTLAN_28", "拡張フィールドが定義されていません");
define("EXTLAN_29", "拡張ユーザフィールドを保存");
define("EXTLAN_30", "拡張フィールドを削除");
define("EXTLAN_33", "編集取消");
define("EXTLAN_34", "拡張フィールド");
define("EXTLAN_35", "カテゴリー");
define("EXTLAN_36", "割り当てられたカテゴリーはない");
define("EXTLAN_37", "定義されたカテゴリーなし");
define("EXTLAN_38", "カテゴリー名");
define("EXTLAN_39", "カテゴリを追加");
define("EXTLAN_40", "カテゴリー作成");
define("EXTLAN_41", "カテゴリー削除");
define("EXTLAN_42", "カテゴリーを更新");
define("EXTLAN_43", "カテゴリー更新");
define("EXTLAN_44", "カテゴリー");
define("EXTLAN_45", "新しいフィールドを追加");
define("EXTLAN_46", "ヘルプ");
define("EXTLAN_47", "新しいパラメータを追加");
define("EXTLAN_48", "新しい値を追加");
define("EXTLAN_49", "Allow user to hide");
define("EXTLAN_50", "Setting this to yes will allow the user to hide this value from non-admins");
define("EXTLAN_51", "Any valid w3c parameter may be entered here<br />e.g. <b><i>class=’tbox’ size=’40’ maxlength=’80’</i></b>");
define("EXTLAN_52", "正規表現検証コード");
define("EXTLAN_53", "Enter the regex code that will need to be matched to make it a valid entry <br />**正規表現の区切り文字が必要です**");
define("EXTLAN_54", "正規表現の失敗テキスト");
define("EXTLAN_55", "正規表現の検証が失敗した場合に表示されるエラーメッセージを入力。");
define("EXTLAN_56", "事前定義されたフィールド");
define("EXTLAN_57", "アクティブ");
define("EXTLAN_58", "非アクティブ");
define("EXTLAN_59", "アクティブ");
define("EXTLAN_60", "非アクティブ");
define("EXTLAN_61", "無し");
define("EXTLAN_62", "テーブル");
define("EXTLAN_63", "フィールドID");
define("EXTLAN_64", "値を表示");
define("EXTLAN_65", "いいえ - 登録ページに表示されません");
define("EXTLAN_66", "はい - 登録ページに表示されます");
define("EXTLAN_67", "いいえ - 登録ページに表示する");
define("EXTLAN_68", "フィールド:");
define("EXTLAN_69", "アクティブ化されている");
define("EXTLAN_70", "ERROR！フィールド：");
define("EXTLAN_71", "アクティブ化されませんでした！");
define("EXTLAN_72", "非アクティブにした");
define("EXTLAN_73", "非アクティブ化されませんでした！");
define("EXTLAN_74", "予約されたフィールド名で使用することができない。");
define("EXTLAN_75", "データベースにフィールドを追加してエラーが発生しました。");
define("EXTLAN_76", "フィールド名に無効な文字 - only A-Z, a-z, 0-9, '_' allowed.");
define("EXTLAN_77", "カテゴリー削除できません - 最初のカテゴリのフィールドを削除する必要があります。");
define("EXTLAN_78", "Cannot find file --FILE-- needed to create data table");
define("EXTLAN_79", "検証エラー - 中止");
define("EXTLAN_HELP_1", "<b><i>Parameters:</i></b><br />size - size of field<br />maxlength - max length of field<br /><br />class - css class of field<br />style - css style string<br /><br />regex - regex validation code<br />regexfail - validation fail text");
define("EXTLAN_HELP_2", "Enter text for options in Values box - one box per option. Add new boxes as needed");
define("EXTLAN_HELP_3", "Enter text for options in Values box - one box per option. Add new boxes as needed");
define("EXTLAN_HELP_4", "<b><i>値:</i></b><br />There should be three values given ALWAYS:<br /><ol><li>dbtable</li><li>field containing id</li><li>field containing value</li></ol><br />");
define("EXTLAN_HELP_5", "自由形式のテキストのための領域を定義します。 （必要に応じたサイズボックスフィールドは、テキストを含む設定）");
define("EXTLAN_HELP_6", "ユーザーは数値を入力できる");
define("EXTLAN_HELP_7", "ユーザーは日付の入力が必要");
define("EXTLAN_HELP_8", "ユーザーはインストールされている言語から選択することができます");


?>