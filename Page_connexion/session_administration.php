<?php
  session_start();
  $_SESSION['Username'] = $_POST['Username'];
    $_SESSION['password']=$_POST['password'];
    $connexion = new mysqli('localhost','root','','database');
    if (!$connexion) {
          die("Échec de la connexion : " . mysqli_connect_error());
      }
      echo "Connexion réussie";

      $request = "SELECT * FROM administration";
      $results = $connexion->query($request);
      $var="false";
      if($_SESSION['password']=="admin" && $_SESSION['Username']=="admin" ){
          header("location:../admin.php");
          }else{
      while($ligne = $results->fetch_assoc()){
        if ($ligne['USERNAME']==$_SESSION['Username'] && $ligne['PASSWORD']==$_SESSION['password'] ) {
          $var="true";
          break;
         }
        
        }
      if ($var=="true") {
            header("Location:../coordonnateur.php");
          }
      else{
  
          header("Location:connexion.php");
      }
    }
?>