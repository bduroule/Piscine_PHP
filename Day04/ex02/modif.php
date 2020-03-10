<?php
if ($_POST['login'] != "" && $_POST['newpw'] != "" && $_POST['oldpw'] != "")
{
    if ($_POST['submit'] == "OK")
    {
        $error = 1;
        $newpw = hash('whirlpool', $_POST['newpw']);
        $oldpw = hash('whirlpool', $_POST['oldpw']);
        $tab = file_get_contents("../private/passwd");
        $test = unserialize($tab);
        foreach($test as $elem => $key)
        {
            if ($_POST['login'] == $key["login"])
            {
                if ($test[$elem]['passwd'] == $oldpw)
                {
                    $test[$elem]['passwd'] = $newpw;
                    $error = 0;
                }
            }
        }
        if (!$error){
            echo "OK\n";
            file_put_contents("../private/passwd", serialize($test));
        }
        else
            echo "ERROR\n";
    }
}
else
    echo "ERROR\n";
?>
