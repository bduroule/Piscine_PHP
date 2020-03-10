#!/usr/bin/php
<?php
function    my_sort($a, $b)
{
    $ascii = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $a = strtolower($a);
    $b = strtolower($b);
    $len1 = strlen($a);
    $len2 = strlen($b);
    while ($i < $len1 || $i < $len2)
    {
        $pos1 = @strpos($ascii, $a[$i]);
        $pos2 = @strpos($ascii, $b[$i]);
        if ($pos1 < $pos2)
            return -1;
        else if ($pos1 > $pos2)
            return 1;
        $i++;
    }
    return 0;
}

$i = 0;

if ($argc < 2)
    exit;
$argv[0] = NULL;
$str = implode(" ", $argv);
$tab = ft_split($str);
foreach($tab as $elem)
{
    echo "$elem"."\n";
}

function    ft_split($str)
{
    $str = trim($str);
    $str = preg_replace("{[  \t]+}", " ", $str);
    $str = explode(" ", $str);
    usort($str, my_sort);
    return($str);
}
?>