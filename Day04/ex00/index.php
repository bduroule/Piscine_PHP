<?php
  session_start();

    if (@($_GET["submit"] == "OK")){
      $_SESSION["login"] = $_GET["login"];
      $_SESSION["passwd"] = $_GET["passwd"];
    }
?>
<form action="index.php" method="GET">
  Identifiant: <input name="login" type="text" value="<?php echo @$_SESSION['login']?>"><br />
  Mots de passe: <input name="passwd" type="password" value="<?php echo @$_SESSION['passwd']?>">
  <input type="submit" value="OK" name="submit">
</form>
