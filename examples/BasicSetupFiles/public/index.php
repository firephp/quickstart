<?php
// Include the bootstrap file (just like all other pages of the application)
require_once(dirname(dirname(__FILE__)) .  '/lib/bootstrap.php');
// Page-specific code follows
?>

<h1>BasicSetupFiles Example</h1>
<p>Welcome to the homepage of the BasicSetupFiles example!<p>
<p><a href="page1.php">Page 1</a></p>
<br/><br/><hr>

<?php
// get a reference to the Page Console
$console = FirePHP::to('page')->console();
// log a test message
$console->log('Hello World from BasicSetupFiles homepage!');


// NOTE: This is needed only for the demo
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/www/common.php');
renderSource(__FILE__);
