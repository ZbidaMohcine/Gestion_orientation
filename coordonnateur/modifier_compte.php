<html>
	<head></head>
	<body>

		<?php 

			
			$id = $_GET['ID'];

	
			// Create connection
		$cnx =new mysqli( "localhost", "root", "","database") ;
			// Check connection
			if ($cnx->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
				
			$result = $cnx->query("SELECT * FROM administration WHERE ID = " . $id);

			if ($row = $result->fetch_assoc()) {
		        $id 		= $row["ID"];
		        $username 		= $row["USERNAME"];
		        $password 		= $row["PASSWORD"];
		       
		    }

			$cnx->close(); 
			
		?>

		<form action="enregistrer_modifier_compte.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
	USERMANE <input type="text" name="username" value="<?php echo $username; ?>" /><br />
	PASSWORD <input type="password" name="password" value="<?php echo $password; ?>" /><br />
		<input type="submit" name="submit" value="SAVE" />
		</form>

	</body>
</html>