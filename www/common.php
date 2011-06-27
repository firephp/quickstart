<?php

$host = $_SERVER['HTTP_HOST'];
$port = $_SERVER['SERVER_PORT'];
$parts = explode(':', $host);
// port specified in $_SERVER['HTTP_HOST'] takes precedence
if(count($parts)==2) {
    $host = $parts[0];
    $port = $parts[1];
}

$hostname = $host . (($port && $port!=80)?':'.$port:'');

$baseURL = 'http://' . $hostname;

$basePath = dirname(dirname(__FILE__));


function renderSource($file)
{
    echo implode("\n", array(
        '<div style="padding: 5px; background-color: #ececec;">',
            '<b>File Source:</b> ' . $file,
        '</div>',
        '<div style="padding: 5px;">',
            highlight_file($file, true),
        '</div>')
    );
}
