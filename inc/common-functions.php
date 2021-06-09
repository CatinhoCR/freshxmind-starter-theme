<?php

/**
 * Helpers and Common Methods for this theme
 * @package freshxmind
 * @author Cato
 * @since 1.0.0
 * @see wp-content/themes/astra/inc/core/common-functions.php
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

$path = 'inc/common/';

$methods_includes = [
  $path . 'conditional-tags.php',
  $path . 'helper-functions.php',
  $path . 'markup-functions.php'
];

foreach ($methods_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'freshxmind'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
