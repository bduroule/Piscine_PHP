#!/usr/bin/php
<?php
function ft_epurstr($str)
{
    $str = trim($str);
    $str = preg_replace("{[  ]+}", " ", $str);
    return ($str);
}
if ($argc < 2)
    exit;
$str = ft_epurstr($argv[1]);
$str = explode(" ", $str);
while ($i++ < count($str) - 1)
    echo $str[$i]." ";
echo $str[0]."\n";
?>