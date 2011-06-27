<?php
// Include the bootstrap file (just like all other pages of the application)
require_once(dirname(__FILE__) .  '/bootstrap.php');
// Page-specific code follows
?>

<h1>BasicSetupConstants Example</h1>
<p>Page 1.<p>
<p><a href="index.php">Home</a></p>
<br/><br/><hr>

<?php
// get a reference to the Page Console
$console = FirePHP::to('page')->console();
// log a test message
$console->label('$_SERVER')->log($_SERVER);


// NOTE: This is needed only for the demo
require_once(dirname(dirname(dirname(__FILE__))) . '/www/common.php');
renderSource(__FILE__);
