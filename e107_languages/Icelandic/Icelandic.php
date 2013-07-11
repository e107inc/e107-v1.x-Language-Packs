<?php

/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Icelandic/Icelandic.php,v $
|     $Revision: 1.2 $
|     $Date: 2005/04/29 07:43:11 $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/
setlocale(LC_ALL, 'is');
define("CORE_LC", 'is');
define("CORE_LC2", 'is');
define("CHARSET", "iso-8859-1");  // for a true multi-language site. :)
define("CORE_LAN1","Villa : þema finnst ekki.\\n\\nChange the used themes in your preferences (admin area) or upload files of the current theme on the server.");

//v.616
define("CORE_LAN2"," \\1 wrote:");// "\\1" represents the username.
define("CORE_LAN3","Viðhengi óvirk");

//v0.7+
define("CORE_LAN4", "Please delete install.php from your server");
define("CORE_LAN5", "if you do not there is a potential security risk to your website");

// v0.7.6
define("CORE_LAN6", "The flood protection on this site has been activated and you are warned that if you carry on requesting pages you could be banned.");
define("CORE_LAN7", "Core is attempting to restore prefs from automatic backup.");
define("CORE_LAN8", "Core Prefs Error");
define("CORE_LAN9", "Core could not restore from automatic backup. Execution halted.");
define("CORE_LAN10", "Corrupted cookie detected - logged out.");

// Footer
define("CORE_LAN11", "Render time: ");
define("CORE_LAN12", " sec, ");
define("CORE_LAN13", " of that for queries. ");
define("CORE_LAN14", "");			// Used in 0.8
define("CORE_LAN15", "DB queries: ");
define("CORE_LAN16", "Memory Usage: ");

// img.bb
define('CORE_LAN17', '[ image disabled ]');
define('CORE_LAN18', 'Image: ');

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "GB");
define("CORE_LAN_TB", "TB");


define("LAN_WARNING", "Warning!");
define("LAN_ERROR", "Error");
define("LAN_ANONYMOUS", "Anonymous");
define("LAN_EMAIL_SUBS", "-email-");

?>