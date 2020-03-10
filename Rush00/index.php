<?php
include 'database.php';
header("content-type: text/html; charset=UTF-8");  

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Menu</title>
		<link rel="stylesheet" href="menu.css">
		<link rel="stylesheet" href="mainpage.css">
	</head>
	<body>
		<div class="lediv"></div>
		<div class="bar">
			<nav>
				<ul>
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
			<div class="principal">
			<div class="second" >

			<?php
				$sql = "SELECT * FROM article";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_fetch_array($result);
				if($resultcheck > 0)
				{
					while($row = mysqli_fetch_assoc($result)): ?>
							<!--<a href="article.php?id=<?php echo $row['id'];?>">-->
							<div class="card" onclick="window.location='article.php?id=<?php echo $row['id'];?>'">
								<img src="<?php echo $row['picture'];?>" alt="Avatar">
								<div class="container">
									<h4><b><?php echo utf8_encode($row['product']);?></b></h4>
									<div class="description">
										<div class="product"> <?php echo utf8_encode($row['description']); ?></div>
										<div class="price"><?php echo $row['price'];?> €</div>
									</div>
								</div>
							</div> </a>
						<?php
					endwhile;
				}
				?>
				</div>
			</div>
		</div>
	</body>
</html>