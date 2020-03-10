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
?>