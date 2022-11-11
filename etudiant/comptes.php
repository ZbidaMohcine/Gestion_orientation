<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		
		$my_con = new mysqli('localhost', 'root','', 'database');

		$request = "SELECT * FROM etudiant";

		$results = $my_con->query($request);
		?>

	<table border="2px" style="text-align: center;margin-left: 30%">
		<tr  style="background-color:green ">
			<th>ID</th>
			<th>USERNAME</th>
			<th>CNE</th>
			<th>DATENAISSANCE</th>
			<th>CODEAPOGEE</th>
			<th>ACTION</th>
		</tr>
		<?php while($ligne = $results->fetch_assoc()){ ?>

	<tr>
			<td><?php echo $ligne['ID']; ?></td>
			<td><?php echo $ligne['USERNAME']; ?></td>
			<td><?php echo $ligne['CNE']; ?></td>
			<td><?php echo $ligne['DATENAISSANCE']; ?></td>
			<td><?php echo $ligne['CODEAPOGEE']; ?></td>
			<td><a href="supprimer.php?ID=<?php echo $ligne['ID'] ?>">supprimer</a>,
				<a href=" modifier.php?ID=<?php echo $ligne['ID']?>">modifier</a></td>

	</tr>
	<?php } ?>	
</table>
<div style="margin-left: 32%">
	<a href="ajouter.php"> ajouter pesronne</a></td>
</div>
		
</body>
</html>