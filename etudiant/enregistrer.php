<?php
$username=$_POST['username'];
$cne=$_POST['cne'];
$datenaissance=$_POST['datenaissance'];
$apogee=$_POST['apogee'];
$conf_apogee=$_POST['conf'];
$message= "";
if(isset($_GET["message"]))
$message=$_GET["$message"];

	if (isset($_POST['username']) && isset($_POST['cne']) && isset($_POST['datenaissance'])&& isset($_POST['apogee'])&& isset($_POST['conf']))
		 {
	
			$my_con = new mysqli('localhost', 'root','', 'database');
			if (!$my_con) {
			      die("Échec de la connexion : " . mysqli_connect_error());
		 			}

			$req="INSERT INTO etudiant VALUES(NULL,'$username','$cne','$datenaissance','$apogee')";
			echo $my_con->query($req);
			if ($my_con->query($req)) {
			     header("location:comptes.php");
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
	
?>