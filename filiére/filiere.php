<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		$my_con = new mysqli('localhost', 'root','', 'database');

		$request = "SELECT * FROM filiere  ";

		$res = $my_con->query($request);
	?>

	<table border="2px" style="text-align: center;margin-left: 30%">
		<tr  style="background-color:green ">
			<th>ID</th>
			<th>NOM</th>
			
		</tr>
		<?php 
		if ($res) {
		while($ligne = $res->fetch_assoc()){ ?>

	<tr>
			<td><?php echo $ligne['ID']; ?></td>
			<td><?php echo $ligne['NOM']; ?></td>
			<td><a href="supprimer.php?ID=<?php echo $ligne['ID'] ?>">supprimer</a></td>

	</tr>
	<?php } } ?>	
</table>
<div style="margin-left: 32%">
	<a href="ajouter.php"> ajouter pesronne</a></td>
</div>
		
</body>
</html>