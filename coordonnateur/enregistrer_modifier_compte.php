<?php 

	$username			= $_POST['username'];
	$id 				= $_POST['id'];
	$password			= $_POST['password'];

	
	
	// Create connection
	$conn = new mysqli( "localhost", "root", "","database") ;
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$query = "UPDATE administration SET USERNAME='" . $username . "', PASSWORD='" . $password . "' WHERE ID = " . $id;

	$result = $conn->query($query);

	if (!$result) {
        printf("Erreur : %s\n", $conn->error);
    }

	$conn->close(); 
	
	header('Location: comptes_coordonnateur.php');

?>