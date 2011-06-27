<?php

// This should be at the TOP of the bootstrap file

define('INSIGHT_IPS', '*');         // <- Your IP here for extra security
define('INSIGHT_AUTHKEYS', '*');    // <- Your Authorization Key here
define('INSIGHT_PATHS', dirname(__FILE__));
define('INSIGHT_SERVER_PATH', '/examples/BasicSetupFiles/public/');

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/firephp-1/lib/FirePHP/Init.php');

// FirePHP can be used anywhere in the application after this point
