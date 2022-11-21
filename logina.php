<?php

      
    session_start(); 
    //include "enregistreuser.php";
    $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));
    $cleactiver= "1v@@@@@_§!ui@@#{[]}";  
    $cryptcle =  MoiGodbless_crypt($cleactiver,$Clef);
    $clep=  MoiGodbless_crypt($cryptcle,$Clef);

    $dbs= mysqli_connect("localhost","root","","logino"); 
    if(isset($_POST["seconnecter"])){

   $nom = MoiGodbless_crypt(strtolower(htmlspecialchars(trim(strip_tags(addslashes($_POST["nom"]))))),$Clef);
  
   $password=strtolower($_POST["password"]);
   //$Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));
   $cleinmot=MoiGodbless_crypt($password,$Clef);
 // $rolap=$_POST["rola"];
  
    $sql= "SELECT * from utilisateur WHERE email=? 
    and motpass=? and cleactive=?";

   //  $entree=$connec->prepare($sql);
     $entree=$dbs->prepare($sql);
    $entree->bind_param("sss",$nom,$cleinmot,$cryptcle);
    $entree->execute();          
    $requete= $entree->get_result(); 
    $row=$requete->fetch_assoc();
    session_regenerate_id();
 
    
    $_SESSION["nompat"] = $row["email"];
    //$_SESSION["postnompaf"] = $row["postnom"];
    //$_SESSION["prenompaf"] = $row["prenom"];
    $_SESSION["motpasspaf"] = $row["motpass"];
   // $_SESSION["clefj"] = $clep;//  $_SESSION pour la cle unique pour chaque user
    $_SESSION["clefj"] = $row["cleactive"];//  $_SESSION pour la cle unique pour chaque user
    session_write_close();
    //*/

    if($requete->num_rows==1)
    {
         
             // header("location:traitement.php");

            // session_start();
      
            // if(session_destroy()){
                
               // header("location:index.php?jemesuisdeconnecté(e)");
              // header("location:formulaire.html");
              header("location:formulaire.php");
       
            // }

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
    
  

