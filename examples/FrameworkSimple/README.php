<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/www/examples/header.php');
?>

<h1>Framework: simple</h1>

<p>This example shows how to use FirePHP with a framework in its simplest form. The framework chosen for this
   example is <a target="_blank" href="http://framework.zend.com/">Zend Framework</a> and the <a target="_blank" href="http://framework.zend.com/manual/en/learning.quickstart.html">ZendFramework Quick Start Application</a>
   is used to demonstrate how to integrate FirePHP.</p>

<p>You can browse the source files for this example on <a target="_blank" href="https://github.com/firephp/quickstart/tree/master/examples/FrameworkSimple/">github</a> or your system (if installed locally) at <b><?php echo $basePath.'/examples/FrameworkSimple/'; ?></b>.</p>

<h2>Some assumptions for this example</h2>

<ul>
    <li>The document root is at: <b><?php echo $basePath; ?></b></li>
    <li>The application root URL is: <b><?php echo $baseURL; ?>/examples/FrameworkSimple/public/</b> (i.e. The URL to the root of the public pages of the <i>ZendFramework Quick Start Application</i>)</li>
    <li>Thus the <a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Concepts#insight-server-path">Insight Server Path</a> is: <b>/examples/FrameworkSimple/public/</b></li>
</ul>

<h2>Instructions</h2>

<ol>
    <li>Open <i>DeveloperCompanion</i> and click <i>New Workspace</i> (<a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Authorizing">detailed instructions</a>)

        <p style="padding: 5px; border: 1px solid #acacac; background-color: #DBFFE6;"><span style="color: #8c8c8c; font-weight: bold;">Homepage URL:</span><b><br/><?php echo $baseURL; ?>/examples/FrameworkSimple/public/</b></p>

        <p style="padding: 5px; border: 1px solid #acacac; background-color: #DBFFE6;"><span style="color: #8c8c8c; font-weight: bold;">Configure and Include FirePHP in Application:</span><b><br/>Advanced (configuration files)</b></p>

    </li>
    <li><b>[already done]</b> Copy the generated code into the respective files. (Show: <a target="example-content" href="/www/show-file.php?path=/examples/FrameworkSimple/package.json">/examples/FrameworkSimple/package.json</a>, <a target="example-content" href="/www/show-file.php?path=/examples/FrameworkSimple/credentials.json">/examples/FrameworkSimple/credentials.json</a>, <a target="example-content" href="/www/show-file.php?path=/examples/FrameworkSimple/public/index.php">/examples/FrameworkSimple/public/index.php</a>)
        <p>NOTE: Typically the <i>authkeys</i> array in <i>credentials.json</i> should include the key provided by <i>DeveloperCompanion</i> in the generated code. Using '*' will allow <b>ALL</b> clients.</p></li>
    <li>Click <i>Add Workspace</i> in <i>DeveloperCompanion</i>.</li>
    <li><a class="browse-example" href="javascript:browseExample('public/index.php')">Browse example</a></li>
</ol>

<h2>While the example pages are navigated</h2>

<ul>
    <li>
        <p>Look for log messages in the <b><a target="_blank" href="http://getfirebug.com/">Firebug</a> <a target="_blank" href="http://getfirebug.com/commandline">Console</a></b>. You must have <i>Firebug</i> and the <i>Firebug Console</i> and <i>Net</i> panels enabled.</p>
    </li>
    <li>
        <p>Look for requests in the <i>Requests</i> table of the <i>Workspace</i> you setup above in the <i>DeveloperCompanion</i> window. Select a request to see detailed information. When done click on the red <i>X</i> next to <i>Request</i> near the top of the window to go back to all requests.</p>
    </li>
</ul>

<h2>Quick Start Application Changes</h2>

<p>The following changes have been made to the Quick Start Application in order to integrate FirePHP:</p>

<ul>
    <li>Configure and include FirePHP (package.json and credentials.json files were also added - see <i>#2</i> under <i>Instructions</i> above)  (Show: <a target="example-content" href="https://github.com/firephp/quickstart/blob/b78d912f0cc1ada49596c883551f3f892b9f2585/examples/FrameworkSimple/public/index.php#L6-7">/examples/FrameworkSimple/public/index.php#L6-7</a>)</li>
    <li>Log incoming <i>$_GET</i> and <i>$_POST</i> variables (Show: <a target="example-content" href="https://github.com/firephp/quickstart/blob/b78d912f0cc1ada49596c883551f3f892b9f2585/examples/FrameworkSimple/public/index.php#L10-12">/examples/FrameworkSimple/public/index.php#L10-12</a>)</li>
    <li>Log controller exceptions (Show: <a target="example-content" href="https://github.com/firephp/quickstart/blob/b78d912f0cc1ada49596c883551f3f892b9f2585/examples/FrameworkSimple/application/controllers/ErrorController.php#L10">/examples/FrameworkSimple/application/controllers/ErrorController.php#L10</a>)</li>
    <li>Log form values before saving (Show: <a target="example-content" href="https://github.com/firephp/quickstart/blob/b78d912f0cc1ada49596c883551f3f892b9f2585/examples/FrameworkSimple/application/controllers/GuestbookController.php#L25">/examples/FrameworkSimple/application/controllers/GuestbookController.php#L25</a>)</li>
</ul>

<h2>Notes</h2>

<ul>
    <li>The <i>FirePHP/Wildfire</i> implementation shipped with Zend Framework is completely bypassed.
        This should be the case with any framework as <i>FirePHP 1.0</i> is intended to be loaded prior to the framework.</li>
    <li>A framework may hook into FirePHP to provide internal information. See <a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Concepts#frameworks">Concepts</a>.</li>
    <li>Existing framework integrations can be found <a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Integrations">here</a>.</li>
</ul>

<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/www/examples/footer.php');
?>
