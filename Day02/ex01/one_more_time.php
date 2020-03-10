#!/usr/bin/php
<?php
if ($argc != 2)
    exit;
date_default_timezone_set("Europe/Paris");
preg_match("/([a-zA-Z]{1}[a-z]{4,7}) ([0-9]{1,2}) ([a-zA-z]{1}[a-z]{2,7}) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $tab);
//print_r($tab);
$day = array(lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche);
$month = array(janvier, fevrier, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, decembre);
$tab[1] = strtolower($tab[1]);
$tab[3] = strtolower($tab[3]);
if (!(in_array($tab[1], $day)))
    exit("Wrong Format\n");
if (!(in_array($tab[3], $month)))
    exit("Wrong Format\n");
if ($tab[2] < '1' || $tab[2] > '31')
    exit("Wrong Format\n");
if ($tab[5] < '0' || $tab[5] > '23')
    exit("Wrong Format\n");
if ($tab[6] < '0' || $tab[6] > '59')
    exit("Wrong Format\n");
if ($tab[7] < '0' || $tab[7] > '59')
    exit("Wrong Format\n");
if ($tab[4] < '1970')
    exit("Wrong Format\n");
$tab[3] = array_search($tab[3], $month) + 1;
echo mktime($tab[5], $tab[6], $tab[7], $tab[3], $tab[2], $tab[4])."\n";
?>
