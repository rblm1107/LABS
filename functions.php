<?php
define('INCLUDE_DIR', get_template_directory() . '/includes');
require_once(INCLUDE_DIR . '/enqueue-scripts.php');
//$path = __DIR__ . ' / includes / menu . php '; et on passe $path ds les param.
require_once(INCLUDE_DIR . '/menu.php');
