#!/usr/bin/php
<?php
function epur($str)
{
    $str = trim($str);
    $str = preg_replace("{[  ]+}", " ", $str);
    return ($str);
}

if ($argc != 4)
    echo "Incorrect Parameters\n";
else{
    if (epur($argv[2]) == '+')
        echo $argv[1] + $argv[3]."\n";
    if (epur($argv[2]) == '-')
        echo $argv[1] - $argv[3]."\n";
    if (epur($argv[2]) == '*')
        echo $argv[1] * $argv[3]."\n";
    if (epur($argv[2]) == '%')
        echo $argv[1] % $argv[3]."\n";
    if (epur($argv[2]) == '/')
        echo $argv[1] / $argv[3]."\n";
}
?>