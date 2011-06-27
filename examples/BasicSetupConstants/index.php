<?php
// Include the bootstrap file (just like all other pages of the application)
require_once(dirname(__FILE__) .  '/bootstrap.php');
// Page-specific code follows
?>

<h1>BasicSetupConstants Example</h1>
<p>Welcome to the homepage of the BasicSetupConstants example!<p>
<p><a href="page1.php">Page 1</a></p>
<br/><br/><hr>

<?php
// get a reference to the Page Console
$console = FirePHP::to('page')->console();
// log a test message
$console->log('Hello World from BasicSetupConstants homepage!');


// NOTE: This is needed only for the demo
require_once(dirname(dirname(dirname(__FILE__))) . '/www/common.php');
renderSource(__FILE__);
