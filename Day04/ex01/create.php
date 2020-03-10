<?php
if ($_POST['login'] != "" && $_POST['passwd'] != "")
{
    if ($_POST['submit'] == "OK")
    {
        $hpasswd = hash('whirlpool', $_POST['passwd']);
        if (file_exists("../private") == 0)
            mkdir("../private", 0777, TRUE);
        if (file_exists("../private/passwd") == 0)
        {
            $tab[] = array('login' => $_POST['login'], 'passwd' =>$hpasswd);
            $stock = serialize($tab);
            file_put_contents("../private/passwd", $stock);
            echo "OK\n";
        }
        else
        {
            $exist = 0;
            $tab = file_get_contents("../private/passwd");
            $test = unserialize($tab);
            foreach($test as $elem)
            {
                if (@$elem['login'] == @$_POST['login'])
                    $exist = 1;
            }
        if ($exist == 0)
        {
            $test[] = array('login'=>$_POST['login'], 'passwd'=>$hpasswd);
            $create = serialize($test);
            file_put_contents("../private/passwd", $create);
            echo "OK\n";
        }
        else
            echo "ERROR\n";
        }
    }
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";
?>
