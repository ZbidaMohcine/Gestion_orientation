<?php
		$username = $_POST['Username'];
		$datenaissance = $_POST['datenaissance'];
		$apogee = $_POST['apogee'];
		$cne=$_POST['cne'];
		
		$connexion = new mysqli('localhost','root','','database');
		if (!$connexion) {
      		die("Échec de la connexion : " . mysqli_connect_error());
			}
 			echo "Connexion réussie";

			$request = "SELECT * FROM etudiant";

			$results = $connexion->query($request);
			$var="false";

		while($ligne = $results->fetch_assoc()){
			if ($ligne['USERNAME']==$username && $ligne['CNE']==$cne && $ligne['CODEAPOGEE']==$apogee && $ligne['DATENAISSANCE']==$datenaissance) {
				$var="true";
				break;
			}
			
			}
		if ($var=="true") {
			header("Location:../admin.html");
		}
		else{
			header("Location:connexion-etd.html");
		}

?>