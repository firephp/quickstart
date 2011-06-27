<?php

// This should be at the TOP of the bootstrap file

define('INSIGHT_CONFIG_PATH', dirname(dirname(__FILE__)) . '/package.json');
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/firephp-1/lib/FirePHP/Init.php');

// FirePHP can be used anywhere in the application after this point
