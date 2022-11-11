<?php
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confPassword'];
$message= "";
if(isset($_GET["message"]))
$message=$_GET["$message"];
if ($password==$confirm) {
	if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['confPassword'])) {
	
		$my_con = new mysqli('localhost', 'root','', 'database');
		if (!$my_con) {
		      die("Échec de la connexion : " . mysqli_connect_error());
		}

		$req="INSERT INTO administration VALUES(NULL,'$username','$password')";
		if ($my_con->query($req)) {
		     header("location:comptes_coordonnateur.php");
		} else {
		      echo "Erreur : " . $req . "<br>" . mysqli_error($my_con);
		}
		mysqli_close($my_con);
	}
	else
	{
	$message="invalid ";
	header("location:ajouter.php?$message");	
	}
	}

else{
	$message="invalid password";
	header("location:ajouter.php?$message");
}
?>