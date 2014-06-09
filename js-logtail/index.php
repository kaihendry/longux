<?php

$cmd = "../long.sh";
$outputfile = "log";
$pidfile = "pid";

exec(sprintf("flock -n /tmp -c %s > %s 2>&1 & echo $! >> %s", $cmd, $outputfile, $pidfile));

?>

<!DOCTYPE html>
<!-- Copyright (c) 2012 Daniel Richman; GNU GPL 3 -->
<html>
    <head>
        <title>habitat parser log viewer</title>
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="logtail.js"></script>
        <link href="logtail.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="header">
            js-logtail.
            <a href="./">Reversed</a> or
            <a href="./?noreverse">chronological</a> view.
            <a id="pause" href='#'>Pause</a>.
        </div>
        <pre id="data">Loading...</pre>
    </body>
</html>
