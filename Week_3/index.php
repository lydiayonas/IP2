<?php
$logFile = fopen("visits.log", "a") or die("Unable to open file");

$logEntry = "Visit from IP: " . $_SERVER['REMOTE_ADDR'] . " on " . date("Y-m-d H:i:s") . "\n";

fwrite($logFile, $logEntry);

fclose($logFile);


$handle = fopen("visits.log", "r") or die("Unable to open file");

while (!feof($handle)) {
    echo fgets($handle) . "<br>";
}

fclose($handle);
