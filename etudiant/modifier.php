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
				
			$result = $cnx->query("SELECT * FROM etudiant WHERE ID = " . $id);

			if ($row = $result->fetch_assoc()) {
		        $id 		= $row["ID"];
		        $username 		= $row["USERNAME"];
		        $cne 		= $row["CNE"];
		        $datenaissance 	= $row["DATENAISSANCE"];
		        $apogee		= $row["CODEAPOGEE"];
		    }

			$cnx->close(); 
			
		?>

		<form action="enregistrer_modifier_compte.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			USERMANE <input type="text" name="username" value="<?php echo $username; ?>" /><br />
			CNE <input type="text" name="cne" value="<?php echo $cne; ?>" /><br />
			DATENAISSANCE <input type="date" name="datenaissance" value="<?php echo $datenaissance; ?>" /><br />
			APOGEEE <input type="text" name="apogee" value="<?php echo $apogee; ?>" /><br />
			<input type="submit" name="submit" value="SAVE" />
		</form>

	</body>
</html>