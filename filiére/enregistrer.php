<?php
$username=$_POST['nom'];

	if (!empty($_POST['nom'])) {
	
		$my_con = new mysqli('localhost', 'root','', 'database');
		if (!$my_con) {
		      die("Échec de la connexion : " . mysqli_connect_error());
		}

		$req="INSERT INTO filiere VALUES(NULL,'$username')";
		$res=$my_con->query($req);

		if ($res) {
		     header("location:filiere.php");
		} else {
			echo "Erreur : " . $req . "<br>" . mysqli_error($my_con);
		}
		mysqli_close($my_con);
	}
	else
		header("location:filiere.php?error");

?>