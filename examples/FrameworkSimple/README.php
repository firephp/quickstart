<?php

require_once(dirname(dirname(dirname(__FILE__))) . '/www/common.php');

?><html>
    <head>
        <link href="/www/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body><table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
        <tr>
            <td>
                <div style="overflow-y: scroll; height: 300px; padding: 10px;">
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
                        <li>Open <i>DeveloperCompanion</i> and click <i>New Workspace</i> (<a target="_blank" href="http://docs.sourcemint.org/firephp.org/firephp/1/-docs/Configuration/Constants">detailed instructions</a>)

                            <p style="padding: 5px; border: 1px solid #acacac; background-color: #DBFFE6;"><span style="color: #8c8c8c; font-weight: bold;">Homepage URL:</span><b><br/><?php echo $baseURL; ?>/examples/FrameworkSimple/public/</b></p>

                            <p style="padding: 5px; border: 1px solid #acacac; background-color: #DBFFE6;"><span style="color: #8c8c8c; font-weight: bold;">Configure and Include FirePHP in Application:</span><b><br/>Advanced (configuration files)</b></p>

                        </li>
                        <li><b>[already done]</b> Copy the generated code into the respective files. (Show: <a target="example-content" href="/www/show-file.php?path=/examples/FrameworkSimple/package.json">/examples/FrameworkSimple/package.json</a>, <a target="example-content" href="/www/show-file.php?path=/examples/FrameworkSimple/credentials.json">/examples/FrameworkSimple/credentials.json</a>, <a target="example-content" href="/www/show-file.php?path=/examples/FrameworkSimple/public/index.php">/examples/FrameworkSimple/public/index.php</a>)
                            <p>NOTE: Typically the <i>authkeys</i> array in <i>credentials.json</i> should include the key provided by <i>DeveloperCompanion</i> in the generated code. Using '*' will allow <b>ALL</b> clients.</p></li>
                        <li>Click <i>Add Workspace</i> in <i>DeveloperCompanion</i>.</li>
                        <li><a target="example-content" href="public/index.php">Browse example</a></li>
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
                </div>
            </td>
        </tr>
        <tr>
            <td height="100%" style="border-top: 1px solid black;"><iframe name="example-content" border="0" frameBorder="0" style="border: 0 px;" width="100%" height="100%"></iframe></td>
        </tr>
    </table></body>
</html>
