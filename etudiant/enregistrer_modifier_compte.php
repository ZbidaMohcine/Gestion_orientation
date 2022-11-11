<?php 

	$username			= $_POST['username'];
	$cne 				= $_POST['cne'];
	$id 				= $_POST['id'];
	$apogee				= $_POST['apogee'];
	$datenaissance 		= $_POST['datenaissance'];
	
	
	// Create connection
	$conn = new mysqli( "localhost", "root", "","database") ;
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$query = "UPDATE etudiant SET USERNAME='" . $username . "', CNE='" . $cne . "',DATENAISSANCE='".$datenaissance."',CODEAPOGEE='".$apogee."' WHERE ID = " . $id;

	$result = $conn->query($query);

	if (!$result) {
        printf("Erreur : %s\n", $conn->error);
    }

	$conn->close(); 
	
	header('Location: comptes.php');

?>