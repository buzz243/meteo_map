<?php
   session_start();
   require('database.php');


    if (isset($_POST['seconnecter'])){
        
          $nom = strtolower(trim($_POST['nom'])); 
           $nomp = strtolower(trim($_POST['postnom']));
            $nompr = strtolower(trim($_POST['prenom'])); 
             $nompt = strtolower(trim($_POST['password']));  
           
              
              $numpm = "DEFAULT()"; 

           // $ft =$nom.$nomp.$nompr.$nompt.$jetonn; 

         
         
        // if($ft!=identiterverif()){

          session_regenerate_id();
          $_SESSION["nom"] =strtolower($_POST['nom']);
          $_SESSION["postnom"] = strtolower($_POST['postnom']);
          $_SESSION["prenom"] = strtolower($_POST['prenom']);
          $_SESSION["sexe"] =$_POST['password'];
          $_SESSION["numcandj"] = $numpm;

          session_write_close();
         //echo   id_random();

        

        

            

         // s'il n'existe pas alors, ajoute le 
        
              
        //   $q= $db->prepare('INSERT INTO utilisateur VALUES(:df,:a,:b,:c,:d)');
        $q= $db->prepare('INSERT INTO utilisateur VALUES(:df,:a,:b,:c,:dk)');

                    $q->execute(array(
                        'df'=> id_random() ,
                        'a'=>$nom ,
                        'b'=>$nomp ,
                        'c'=>$nompr ,
                        'dk'=>$nompt 
                     
                  ));
             
                  header("location:index.php");

                }

//    	 }
              function id_random(){

                   return  mt_rand(1,998156997); //donner de façpn aleatoire id au user
              }


?>
