<?php
   session_start();
   require('database.php');
   $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));


    if (isset($_POST['seconnecter'])){
        
          $nom = strtolower(trim($_POST['nom'])); 
           $nomp = strtolower(trim($_POST['postnom']));
            $nompr = strtolower(trim($_POST['prenom'])); 
             $nompt = strtolower(trim($_POST['password']));  
              $nompti = strtolower(trim($_POST['passwordi'])); 
             $cryptmot = Godbless_crypt($nompt,$Clef);
           
              
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
        if($nompt==$nompti)
        {
        $q= $db->prepare("INSERT INTO utilisateur VALUES(:df,:a,:b,:c,:dk)");

                    $q->execute(array(
                        'df'=> id_random() ,
                        'a'=>$nom ,
                        'b'=>$nomp ,
                        'c'=>$nompr ,
                        'dk'=>$cryptmot 
                     
                  ));
             
                 header("location:index.php");
                //echo Godbless_crypt(Godbless_crypt($nompt,$Clef),$Clef);

                }


                if(!($nompt==$nompti)){
                   echo "<script type='javascript/text'> alert('les deux mots de passe doivent être identique');</script>";
                  header("location:creationpanier.php");
                       
                 }
        }
       

//    	 }
              function id_random(){

                   return  mt_rand(1,998156997); //donner de façpn aleatoire id au user
              }



              $lacle = md5("$*ed/_");

              //lieu du cryptage
        
function  Godbless_crypt($mot,$clef){

    $Lclef=strlen($clef);
    $Lmot = strlen($mot); 

    if($Lclef < $Lmot){
       
        
        $clef = str_pad($clef, $Lmot,$Lclef,STR_PAD_RIGHT); 


    }

       elseif($Lclef > $Lmot){

        

          $jhg = $Lclef - $Lmot ;
          $_clefs = substr($clef,0,$jhg); 

       }
       
        return $mot ^ $clef ; 

} 

   function Godbless_decrypt($mot,$clef){
          // A réflèchir plus tard...
          
   }
 

              


?>
