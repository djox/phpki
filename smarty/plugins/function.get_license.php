<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.get_license.php
 * Type:     function
 * Name:     get_license
 * Purpose:  gets the content of the license file
 * -------------------------------------------------------------
 */
function smarty_function_get_license($params, $smarty)
{
  $license_text = file_get_contents('./LICENSE.TXT');
  $smarty->assign($params['assign'],$license_text);
}
?>