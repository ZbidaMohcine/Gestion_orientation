<?php
 
  $cnx =new mysqli( "localhost", "root", "","database") ;
 
  
  $id  = $_GET['ID'] ;
 
  //requête SQL:
  $sql = "DELETE FROM administration WHERE ID = ".$id ;
  $requete = $cnx->query($sql);    

  if($requete)
  {
    header("location:comptes_coordonnateur.php");
   // echo("La suppression à été correctement effectuée") ;
  }
  else
  {
    header("location:comptes_coordonnateur.php");
  }
?>