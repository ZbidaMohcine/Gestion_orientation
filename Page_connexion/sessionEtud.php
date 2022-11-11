<?php
  session_start();
  $_SESSION['Username'] = $_POST['Username'];
    $_SESSION['cne']=$_POST['cne'];
    $_SESSION['apogee']=$_POST['apogee'];
    $_SESSION['datenaissance']=$_POST['datenaissance'];
    $connexion = new mysqli('localhost','root','','database');
    if (!$connexion) {
          die("Échec de la connexion : " . mysqli_connect_error());
      }
      echo "Connexion réussie";

      $request = "SELECT * FROM etudiant";
      $results = $connexion->query($request);
    while($ligne = $results->fetch_assoc()){
      if ($ligne['USERNAME']==$_SESSION['Username'] && $ligne['CNE']==$_SESSION['cne'] && $ligne['CODEAPOGEE']==$_SESSION['apogee'] && $ligne['DATENAISSANCE']==$_SESSION['datenaissance']) {
       header("location:../etudiant.php");
        break;
      }else
      header("location:connexion-etd.php");
    }
?>