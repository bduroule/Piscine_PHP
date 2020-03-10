<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modification du mot de passe</title>
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
						if ($row['user_name'] == $_POST['login'] &&$row['user_passwd'] == hash('whirlpool', $_POST["passwd"]))
						{
							$_POST['newpw'] = mysqli_real_escape_string($conn, $_POST['newpw']);
							mysqli_query($conn, "UPDATE users SET user_passwd='".hash('whirlpool', $_POST["newpw"])."' WHERE user_name='".$_POST['login']."'");
							header('Location: connect.php');
						}
						else
						{
							?>'<script type="text/javascript">alert("Les mots de passes sont différents");</script>';<?php
						}
				}
			}
		?>
		<div class="connectBox">
				<form class="inbox" action="modif.php" method="post">
					<a>Identifiant:</a><br /> 
					<input type="text" name="login" required>
					<br /><br />
					<a>Mot de passe:</a>
					<br />
					 <input type="password" name="passwd" required>
					 <br /><br />
					<a>Nouveau Mot de passe:</a>
					<br />
					 <input type="password" name="newpw" required>
					<br /><br />
					<input class="btn" type="submit" name="submit" value="OK">
					<br /><br />
					<a href="connect.php">Retourner à la page de connexion</a>
					<br />
					<a href="index.php">Retour</a>
				</form>

		</div>
	</body>
</html>