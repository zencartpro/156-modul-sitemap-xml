<?php
/**
 * Common Template
 *
 * outputs the html header. i,e, everything that comes before the \</head\> tag <br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: html_header.php 2019-07-10 08:30:49Z webchills $
 */
if (is_file(DIR_WS_CLASSES . 'Mobile_Detect.php')) {
  if (!class_exists('Mobile_Detect')) {
    include_once(DIR_WS_CLASSES . 'Mobile_Detect.php');
  }
  $detect = new Mobile_Detect;
  $isMobile = $detect->isMobile();
  $isTablet = $detect->isTablet();
  if (!isset($layoutType)) $layoutType = ($isMobile ? ($isTablet ? 'tablet' : 'mobile') : 'default');
}

?>
<!DOCTYPE html>
<html <?php echo HTML_PARAMS; ?>>
<head>
<title><?php echo HEADING_TITLE; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>" />
<?php if (defined('FAVICON')) { ?>
<link rel="icon" href="<?php echo FAVICON; ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo FAVICON; ?>" type="image/x-icon" />
<?php } //endif FAVICON ?>

<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER . DIR_WS_HTTPS_CATALOG : HTTP_SERVER . DIR_WS_CATALOG ); ?>" />
<style>
body {
  font-family: Verdana, Geneva, sans-serif;
  font-size: small;
  }
</style>
</head>
<?php // NOTE: Blank line following is intended: ?>

