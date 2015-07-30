<?php

require('/usr/share/php/smarty3/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/tank/server/web/ca/smarty/templates');
$smarty->setCompileDir('/tank/server/web/ca/smarty/templates_c');
$smarty->setCacheDir('/tank/server/web/ca/smarty/cache');
$smarty->setConfigDir('/tank/server/web/ca/smarty/config');

$smarty->testInstall();
include('./config.php');
include('./include/my_functions.php');
include('./include/common.php');

$license_text = readfile("./LICENSE.TXT");
?>
