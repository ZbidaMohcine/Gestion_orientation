<?php
 
  $cnx =new mysqli( "localhost", "root", "","database") ;
 
  
  $id  = $_GET['ID'] ;
 
  //requête SQL:
  $sql = "DELETE FROM filiere WHERE ID = ".$id ;
  $requete = $cnx->query($sql);    

  if($requete)
  {
    header("location:filiere.php");
   // echo("La suppression à été correctement effectuée") ;
  }
  else
  {
    header("location:filiere.php?error");
  }
?>