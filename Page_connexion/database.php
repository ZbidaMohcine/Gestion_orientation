<?php
		$username = $_POST['username'];
		$cne = $_POST['password'];
		$personne=explode("\n", "database.csv");
		for ($i=0; $i<count($personne) ; $i++) 
		{ 
			$etudiant=explode(",", $personne[$i]);
			foreach ($etudiant as list($a,$b))
					{
					if (isset($_POST['username'])&& $_POST['username']==$a)
				   		{
					 	 if (isset($_POST['password']) && $_POST['password']==$b ) 
					 		{header("Location: admin.html");}
						}
					}
			header("Location:connexion-etd.html");
			}
?>