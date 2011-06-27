<?php

require_once(dirname(__FILE__) . '/common.php');

$file = $basePath . $_GET['path'];

if (!file_exists($file)) {
    echo 'File not Found!';
    return;
}

?>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php renderSource($file); ?>
    </body>
</html>
