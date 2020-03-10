<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
		<link rel="stylesheet" href="connect.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);
			if($resultcheck > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if (isset($_POST['login']) && isset($_POST['passwd']))
						if ($row['user_name'] == $_POST['login'] && $row['user_passwd'] == hash('whirlpool', $_POST["passwd"]))
						{
							mysqli_query($conn, "DELETE FROM users WHERE user_name='".$_POST['login']."'");
							header('Location: logout.php');
						}
				}
			}
		?>
		<div class="connectBox">
				<form class="inbox" action="delete.php" method="post">
					<a>Identifiant:</a><br /> 
					<input type="text" name="login" required>
					<br /><br />
					<a>Mot de passe:</a><br />
					 <input type="password" name="passwd" required>
					<br /><br />
					<input class="btn" type="submit" name="submit" value="OK">
					<br /><br />
					<a href="index.php">Retour</a>
				</form>
		</div>
	</body>
</html>