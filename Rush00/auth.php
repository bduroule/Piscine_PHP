<?php
	function auth($login, $passwd)
	{
		$check = @unserialize(file_get_contents("../private/passwd"));
		$err = 1;
		if ($check)
		{
			foreach($check as $v)
			{
				if (($login == $v["user"]) && hash('whirlpool', $passwd) == $v["passwd"])
					return (1);
			}
		}
		return (0);
	}
?>
