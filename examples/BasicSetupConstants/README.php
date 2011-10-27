<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/www/examples/header.php');
?>

<h1>Basic Setup: constants</h1>

<p>Use this setup if you want to get FirePHP working with minimal fuss. It should work for most PHP
   environments by using the default FirePHP configuration. If you need a more configurable setup see the
    <a href="../BasicSetupFiles">Basic Setup: Files</a> example.</p>

<p>You can browse the source files for this example on <a target="_blank" href="https://github.com/firephp/quickstart/tree/master/examples/BasicSetupConstants/">github</a> or your system (if installed locally) at <b><?php echo $basePath.'/examples/BasicSetupConstants/'; ?></b>.</p>

<h2>Some assumptions for this example</h2>

<ul>
    <li>The document root is at: <b><?php echo $basePath; ?></b></li>
    <li>The application root URL is: <b><?php echo $baseURL; ?>/examples/BasicSetupConstants/</b> (i.e. The URL to the root of the public pages of this example which we are treating as an application)</li>
    <li>Thus the <a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Concepts#insight-server-path">Insight Server Path</a> is: <b>/examples/BasicSetupConstants/</b></li>
</ul>

<h2>Instructions</h2>

<ol>
    <li>Open <i>DeveloperCompanion</i> and click <i>New Workspace</i> (<a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Authorizing">detailed instructions</a>)

        <p style="padding: 5px; border: 1px solid #acacac; background-color: #DBFFE6;"><span style="color: #8c8c8c; font-weight: bold;">Homepage URL:</span><b><br/><?php echo $baseURL; ?>/examples/BasicSetupConstants/</b></p>

        <p style="padding: 5px; border: 1px solid #acacac; background-color: #DBFFE6;"><span style="color: #8c8c8c; font-weight: bold;">Configure and Include FirePHP in Application:</span><b><br/>Simple (constants)</b></p>

    </li>
    <li><b>[already done]</b> Copy the generated code into the <a target="_blank" href="http://devzone.zend.com/article/70">bootstrap</a> file. (Show: <a target="example-content" href="/www/show-file.php?path=/examples/BasicSetupConstants/bootstrap.php">/examples/BasicSetupConstants/bootstrap.php</a>)
        <p>NOTE: Typically the <i>INSIGHT_AUTHKEYS</i> constant should be set to the key provided by <i>DeveloperCompanion</i> in the generated code. Using '*' will allow <b>ALL</b> clients.</p></li>
    <li>Click <i>Add Workspace</i> in <i>DeveloperCompanion</i>.</li>
    <li><a class="browse-example" href="javascript:browseExample()">Browse example</a></li>
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

<h2>More Information</h2>

<p>See: <a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Configuration/Constants">http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Configuration/Constants</a></p>

<?php
require_once(dirname(dirname(dirname(__FILE__))) . '/www/examples/footer.php');
?>