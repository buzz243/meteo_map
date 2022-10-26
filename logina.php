<?php

      
    session_start(); 
    //include "enregistreuser.php";
    $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));

    $dbs= mysqli_connect("localhost","root","","logino"); 
    if(isset($_POST["seconnecter"])){

   $nom=strtolower($_POST["nom"]);
  
   $password=strtolower($_POST["password"]);
   //$Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));
   $cleinmot=MoiGodbless_crypt($password,$Clef);
 // $rolap=$_POST["rola"];
  
    $sql= "SELECT * from utilisateur WHERE nom=? 
    and motpass=?";

   //  $entree=$connec->prepare($sql);
     $entree=$dbs->prepare($sql);
    $entree->bind_param("ss",$nom,$cleinmot);
    $entree->execute();          
    $requete= $entree->get_result(); 
    $row=$requete->fetch_assoc();
    //session_regenerate_id();
 
    
    /*$_SESSION["nompat"] = $row["nom"];
    $_SESSION["postnompaf"] = $row["postnom"];
    $_SESSION["prenompaf"] = $row["prenom"];
    $_SESSION["motpasspaf"] = $row["motpass"];
    session_write_close();
    */

    if($requete->num_rows==1)
    {
         
             // header("location:traitement.php");

            // session_start();
      
             if(session_destroy()){
                
               // header("location:index.php?jemesuisdeconnecté(e)");
               header("location:formulaire.html");
       
             }

              //header("location:formulaire.html");


    }
    if(!($requete->num_rows==1))
    {
         
             // header("location:traitement.php");

              header("location:creationpanier.php");


    }
    }
       

    function  MoiGodbless_crypt($mot,$clef){

      $Lclef=strlen($clef);//
      $Lmot = strlen($mot); //
  
      if($Lclef < $Lmot){
         
          
          $clef = str_pad($clef, $Lmot,$Lclef,STR_PAD_RIGHT); 
  
  
      }
  
         elseif($Lclef > $Lmot){
  
          
  
            $jh = $Lclef - $Lmot ;
            $_clefs = substr($clef,0,$jh); 
  
         }
         
          return $mot ^ $clef ; 
  
  } 


?>
    
  

