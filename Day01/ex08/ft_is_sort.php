#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
    $i = -1;
    while (++$i < count($tab))
        if ($tab[$i + 1] && $tab[$i] > $tab[$i + 1])
            return (0);
    return (1);
}
?>