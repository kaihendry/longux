<h1>Running long running process</h1>

<?php
$cmd = "./long.sh";
$logfile = "long.log";
exec(sprintf("flock -n /tmp -c %s > %s 2>&1 &", $cmd, $logfile));
?>

<p>Please view the <a href=<?php echo $logfile;?>>logfile</a>.</p>
