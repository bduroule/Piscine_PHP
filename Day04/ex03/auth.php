<?php
function    auth($login, $passwd)
{
  $tab = file_get_contents("../private/passwd");
	$test = unserialize($tab);
  $passwd = hash('whirlpool', $passwd);
	foreach($test as $elem => $key)
	{
		if ($login == $test[$elem]['login'] && $passwd == $test[$elem]['passwd'])
			return (TRUE);
	}
  echo "A";
	return (FALSE);
}
?>
