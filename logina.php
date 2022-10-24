<?php

      
    session_start(); 

    $dbs= mysqli_connect("localhost","root","","logino"); 
    if(isset($_POST["seconnecter"])){

   $nom=strtolower($_POST["nom"]);
   $prenom=strtolower($_POST["prenom"]);
   $pos=strtolower($_POST["postnom"]);
   $password=strtolower($_POST["password"]);
 // $rolap=$_POST["rola"];
  
    $sql= "SELECT * from utilisateur WHERE nom=? 
    and postnom=? and prenom=? 
    and motpass=?";

   //  $entree=$connec->prepare($sql);
     $entree=$dbs->prepare($sql);
    $entree->bind_param("ssss",$nom,$pos,$prenom,$password);
    $entree->execute();          
    $requete= $entree->get_result(); 
    $row=$requete->fetch_assoc();
    session_regenerate_id();
 
    
    $_SESSION["nompat"] = $row["nom"];
    $_SESSION["postnompaf"] = $row["postnom"];
    $_SESSION["prenompaf"] = $row["prenom"];
    $_SESSION["motpasspaf"] = $row["motpass"];
    session_write_close();

    if($requete->num_rows==1)
    {
         
             // header("location:traitement.php");

              header("location:formulaire.html");


    }
    }
?>
    
  

