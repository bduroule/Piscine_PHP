<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connection</title>
		<link rel="stylesheet" href="connect.css">
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);
			$err = 0;
			if($resultcheck > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if (isset($_POST['login']))
						if ($row['user_name'] == $_POST['login'])
						{
							echo '<script type="text/javascript">alert("L\'identifiant est déjà utilisé");</script>';
							$err = 1;
						}
					if (isset($_POST['email']))
						if ($row['user_email'] == $_POST['email'])
						{
							echo '<script type="text/javascript">alert("L\'email est déjà utilisé");</script>';
							$err = 1;
						}
				}
			}
			if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['passwd']) && isset($_POST['checkpasswd']) && !$err)
				if ($_POST['passwd'] == $_POST['checkpasswd'])
				{
					$_POST["login"] = mysqli_real_escape_string($conn,$_POST["login"]);
					$_POST["email"] = mysqli_real_escape_string($conn,$_POST["email"]);
					$_POST["passwd"] = mysqli_real_escape_string($conn,$_POST["passwd"]);
					mysqli_query($conn, "INSERT INTO users (user_name, user_email, user_uid, user_passwd) VALUES ('".$_POST["login"]."','".$_POST["email"]."', 'Client','".hash('whirlpool', $_POST["passwd"])."')");
					header("Location: connect.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("Les mots de passes sont différents");</script>';
				}

		?>
		<div class="connectBox">
			<form class="inbox" action="create.php" method="post">
				<a>Identifiant:</a><br /> <input class="textbox"type="text" name="login" required>
				<br /><br />
				<a>Adresse E-mail:</a><br /> <input class="textbox"type="email" name="email" required>
				<br /><br />
				<a>Mot de passe:</a><br /> <input  class="textbox" type="password" name="passwd" required>
				<br /><br />
				<a>Retapez le Mot de passe:</a><br /> <input class="textbox" type="password" name="checkpasswd" required>
				<br /><br />
				<input class= "btn" type="submit" name="submit" value="OK">
				<br />
				<a href="index.php">Retour</a>
			</form>
		</div>
	</body>
</html>