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
|     $URL: https://e107.svn.sourceforge.net/svnroot/e107/trunk/e107_0.7/e107_languages/English/admin/help/administrator.php $
|     $Revision: 11678 $
|     $Id: administrator.php 11678 2010-08-22 00:43:45Z e107coders $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Site Admin Βοήθεια";
$text = "Χρησιμοποιήστε αυτή τη σελίδα για να επεξεργαστείτε τις προτιμήσεις, ή να διαγράψετε διαχειριστές της ιστοσελίδας. Ο διαχειριστής θα έχει μόνο την άδεια να έχετε πρόσβαση στις δυνατότητες που σημειώσατε.<br /><br />
Για να δημιουργήσετε ένα νέο admin μεταβείτε στη σελίδα ρυθμίσεων χρήστη και να ενημερώσετε μια υπάρχουσα χρήστη admin ιδιότητα.";
$ns -> tablerender($caption, $text);
?>