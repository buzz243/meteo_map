<?php
      
      session_start(); 
      
    
    //include "enregistreuser.php";
    $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));
    $cleactiver= "1v@@@@@_§!ui@@#{[]}";  
    $cryptcle =  MoiGodbless_crypt($cleactiver,$Clef);
    $clep=  MoiGodbless_crypt($cryptcle,$Clef);

    //$dbs= mysqli_connect("localhost","root","","logino");
   
    if(isset($_POST["seconnecter"])){

    $bdg= new PDO('mysql:host=localhost;dbname=logino','root','');

   $nom = MoiGodbless_crypt(strtolower(htmlspecialchars(trim(strip_tags(addslashes($_POST["nom"]))))),$Clef);
   //$nomp = $_POST["nom"];
   $password=strtolower($_POST["password"]);
   //$Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));
   $cleinmot=MoiGodbless_crypt($password,$Clef);
 // $rolap=$_POST["rola"];
  
    $sqlp= "SELECT * from utilisateur WHERE email= '$nom' 
    AND motpass= '$cleinmot' AND cleactive= '$cryptcle'";
    //AND motpass= '$cleinmot' AND cleactive= '$cryptcle'
    //and motpass='$cleinmot' and cleactive='$cryptcle'

    $retp =  $bdg->prepare($sqlp);
    $retp->execute();

   //  $entree=$connec->prepare($sql);
    /* $entree=$dbs->prepare($sql);
    $entree->bind_param("sss",$nom,$cleinmot,$cryptcle);
    $entree->execute();          
    $requete= $entree->get_result(); 
    $row=$requete->fetch_assoc();*/
    
    //session_regenerate_id();
    // Soient les informations de notre utilisateur existantes :
    //à tester dans le formulaire login ci-dessous:

    // email : pramartupty@gmail.com
    //mot de passe : pramartupty@gmail.com12
   
    
    
    //*/

    if($retp->rowCount() > 0)
    { //Si user existe alors qu'il se connecte
       
      
        $data=  $retp->fetchAll();
        session_regenerate_id();
    $_SESSION["nompato"] = $data[0]["email"];
    //$_SESSION["postnompaf"] = $row["postnom"];
    //$_SESSION["prenompaf"] = $row["prenom"];
    $_SESSION["motpasspafo"] = $data[0]["motpass"];
   // $_SESSION["clefj"] = $clep;//  $_SESSION pour la cle unique pour chaque user
    $_SESSION["clefjk"] = $data[0]["cleactive"];//  $_SESSION pour la cle unique pour chaque user
    session_write_close();
         
             // header("location:traitement.php");

            // session_start();
      
            // if(session_destroy()){
                
               // header("location:index.php?jemesuisdeconnecté(e)");
               //header("location:formulaire.html");
             header("location:formulaire.php");
            
            // echo $retp->rowCount() ;
       
            // }

              //header("location:formulaire.html");


    }
    if(!($retp->rowCount() > 0))
    {
         
             // header("location:traitement.php");
            // echo "pa connecter ".$retp->rowCount();


            //header("location:index.php?erreura=créez votre compte erreur");
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
    
  

