#!/usr/bin/php
<?php
if ($argc > 2 || $argc < 2)
    exit;
    $str = trim($argv[1]);
    $str = preg_replace("{[  ]+}", " ", $str);
    echo $str . "\n";
?>