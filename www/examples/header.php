<?php

require_once(dirname(dirname(__FILE__)) . '/common.php');

?><html>
    <head>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link href="/www/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
        <script>
            function browseExample(uri) {
                $("#example-content").attr("src", document.location.href.replace(/\/[^\/]*$/, "/" + (uri || "index.php")));
                $("#example-window").dialog({
                    modal: true,
                    width: "90%",
                    height: ($(window).height()<550)?$(window).height()-50:500,
                    title: "Example"
                });
            }
        </script>
    </head>
    <body>
        <div style="padding: 10px;">
