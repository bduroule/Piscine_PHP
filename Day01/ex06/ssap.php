#!/usr/bin/php
<?php
function ft_split($str)
{
    $str = trim($str);
    $str = preg_replace("{[  \t]+}", " ", $str);
    $str = explode(" ", "$str");
    sort($str);
    return ($str);
}
if ($argc < 2)
    exit;
$argv[0] = NULL;
$str = implode(" ", $argv);
$tab = ft_split($str);
foreach ($tab as $elem)
    echo "$elem" . "\n";
?>