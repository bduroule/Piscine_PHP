<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Menu</title>
		<link rel="stylesheet" href="menu.css">
		<link rel="stylesheet" href="article.css">

	</head>
	<body>
	<div class="lediv"></div>
		<div class="bar">
			<nav>
				<ul>
				<li class="mhome"><a href="index.php">ACCUEIL</a>
				</li>
				<li class="mpain"><a>HOMME</a>
						<ul class="sub">
							<li><a>VESTE</a></li>
							<li><a>PULL</a></li>
							<li><a>JEAN</a></li>
							<li><a>T-SHIRT</a></li>
							<li><a>CHAUSSURES</a></li>
						</ul>
					</li>
					<li class="mgarniture"><a>FEMME</a>
						<ul class="sub">
							<li><a>VESTE</a></li>
							<li><a>PULL</a></li>
							<li><a>JEAN</a></li>
							<li><a>T-SHIRT</a></li>
							<li><a>ROBE</a></li>
						</ul>
					</li>
					<li class="msauce"><a>ACCESSOIRES</a>
						<ul class="sub">
							<li><a>CEINTURE</a></li>
							<li><a>MONTRE</a></li>
							<li><a>BIJOUX</a></li>
							<li><a>CHAPEAUX</a></li>
						</ul>
					</li>
					<li class="mtaille"><a>TAILLE</a>
						<ul class="sub">
							<li><a>S</a></li>
							<li><a>M</a></li>
							<li><a>L</a></li>
							<li><a>XL</a></li>
						</ul>
					</li>
					<?php
						session_start();
						if (isset($_SESSION["USER"]))
						{
							?><li class='mconnection'><a href='logout.php'>DÉCONNEXION</a></li><?php
						}
						else
						{
							?><li class='mconnection'><a href='connect.php'>CONNEXION</a></li><?php
						}
					?>
				</ul>
			</nav>
		</div>
		<?php
		$query = "SELECT * FROM article WHERE id = ".$_GET['id']." LIMIT 1";
		$result = mysqli_query($conn, $query);
		$resultcheck = mysqli_num_rows($result);
		if($resultcheck > 0)
		{
			$row = mysqli_fetch_assoc($result);
		}?>
		<div class="principal">
			<div class="card">
				<img src=<?php echo $row['picture'];?>>
			</div>
			<div class="info">
				<h4><b><?php echo utf8_encode($row['product']);?></b></h4>
				<hr>
				<div class="description"> <?php echo utf8_encode($row['description']);?></div>
				<br />
				<div class="price"><?php echo $row['price'];?> € <input class="buy" type="button" name="buy" value="BUY"></div>
			</div>
		</div>
	</body>
</html>