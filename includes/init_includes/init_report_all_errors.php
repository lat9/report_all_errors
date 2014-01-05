<?php
// -----
// Part of the Report All Errors plugin, provided by lat9@vinosdefrutastropicales.com
//
// @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
//
/*-----
** If the configuration value is set to report all errors during the store's operation, enable it!
*/
if (defined('REPORT_ALL_ERRORS_STORE') && REPORT_ALL_ERRORS_STORE == 'Yes') {
  @ini_set('error_reporting', -1 );
}