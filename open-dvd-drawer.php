<?php
header('Content-Type: text/plain');
$command = 'start "" "H:\\open-dvd-drawer\\open-dvd-drawer.bat"';
$output = shell_exec($command);
echo 'DVD drawer opened.';
?>
