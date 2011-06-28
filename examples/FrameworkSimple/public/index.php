<?php
// Add the Zend Framework library to the include path
set_include_path(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/zf-1/library' . PATH_SEPARATOR . get_include_path());

// Configure and include FirePHP
define('INSIGHT_CONFIG_PATH', dirname(dirname(__FILE__)) . '/package.json');
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/firephp-1/lib/FirePHP/Init.php');
// FirePHP can be used anywhere in the application after this point

$requestVarsConsole = FirePHP::to('page')->console()->group('request-vars', 'Request Variables');
$requestVarsConsole->label('$_GET')->log($_GET);
$requestVarsConsole->label('$_POST')->log($_POST);

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()
            ->run();
