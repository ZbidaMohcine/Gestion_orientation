<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="enregistrer.php">
		<table>
			<tr>
				<th><label for="nom">USERNAME:</label></th>
				<th><input type="text" name="username"></th>
			</tr>
			<tr>
				<th><label for="cne">CNE:</label></th>
				<th><input type="text" name="cne"></th>
			</tr>
			<tr>
				<th><label for="datenaissance">DATENAISSANCE:</label></th>
				<th><input type="date" name="datenaissance"></th>
			</tr>
			<tr>
				<th><label for="apogee">CODEAPOGEE:</label></th>
				<th><input type="password" name="apogee"></th>
			</tr>
			<tr>
				<th><label for="conf">CONF_CODEAPOGEE:</label></th>
				<th><input type="password" name="conf"></th>
			</tr>
			<tr>
				<th></th>
				<th><input type="submit" name="" value="enregistrer"></th>
			</tr>
		</table>
	</form>
</body>
</html>