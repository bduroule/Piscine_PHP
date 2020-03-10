#!/usr/bin/php
<?php
while (!feof(STDIN) && STDIN)
{
    echo 'Entrez un nombre: ';
    $var = rtrim(fgets(STDIN));

    if (is_numeric($var))
    {
        if ($var % 2 == 1)
            echo 'Le chiffre ' . $var . ' est Impair' . "\n";
        else
            echo 'Le chiffre ' . $var . ' est Pair' . "\n";
    }
    else
        echo '\'' . $var . '\'' . ' n\'est pas un chiffre' . "\n";
}
?>