<?php
   session_start();
   require('database.php');
  require('decore.php');
   $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));

   $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));

   $dbs= mysqli_connect("localhost","root","","logino"); 
    if (isset($_POST['seconnecter'])){
        
          $nom = Godbless_crypt(strtolower(htmlspecialchars(trim(strip_tags(addslashes($_POST['nom']))))),$Clef); 
          // $nomp = strtolower(trim($_POST['postnom']));
            //$nompr = strtolower(trim($_POST['prenom'])); 
             $nompt = strtolower(trim($_POST['password']));
              $cleactiver= "1v@@@@@_§!ui@@#{[]}";  
              $nompti = strtolower(trim($_POST['passwordi'])); 
              $cryptmot = Godbless_crypt($nompt,$Clef);
              $cryptcle = Godbless_crypt($cleactiver,$Clef);
           
              
              $numpm = "DEFAULT()"; 

              
       $sql= "SELECT * from utilisateur WHERE email=?";

   //  $entree=$connec->prepare($sql);
       $entree=$dbs->prepare($sql);
       $entree->bind_param("s",$nom);
       $entree->execute();          
       $requete= $entree->get_result(); 
       $row=$requete->fetch_assoc();

           

         
         
        // if($ft!=identiterverif()){

         if(!($requete->num_rows==1))
    { //quand il n'existe , c'est alors il peut être inséré
   
          session_regenerate_id();
          $_SESSION["nom"] =strtolower($_POST['nom']);
         // $_SESSION["postnom"] = strtolower($_POST['postnom']);
          //$_SESSION["prenom"] = strtolower($_POST['prenom']);
          $_SESSION["cls"] =$_POST['password'];
          $_SESSION["numcandj"] = $numpm;
          $_SESSION["clefj"] = Godbless_crypt($cryptcle,$Clef);//  $_SESSION pour la cle

          session_write_close();
         //echo   id_random();

        

        

            

         // s'il n'existe pas alors, ajoute le 
        
              
        //   $q= $db->prepare('INSERT INTO utilisateur VALUES(:df,:a,:b,:c,:d)');
        if($nompt==$nompti)
        {
         $Lmotp = strlen($nompt); 
         //LA LONGUEUR DU MOT DE PASSE SOIT SUPERIEUR OU EGALE A 8
         if($Lmotp>=8){


        

        $q= $db->prepare("INSERT INTO utilisateur VALUES(:df,:a,:dk,:dfj)");

                    $q->execute(array(
                        'df'=> id_random() ,
                        'a'=>$nom,
                        'dk'=>$cryptmot,
                        'dfj'=>$cryptcle
                     
                  ));
             
                 header("location:index.php");
                //echo Godbless_crypt(Godbless_crypt($nompt,$Clef),$Clef);

                }
               // echo '<script src="sweetalert.min.js"></script>
                 //      <script type="text/javascript">';
                if($Lmotp<8){
                       
                  header("location:creationpanier.php");
               }
                     //sweetalert("OOps","les deux mots de passe doivent être identique","error");
               }
                if(!($nompt==$nompti)){
                   //sweetAlert("OOps","les deux mots incorrects","error");
                  // echo "<script> alert('les deux mots de passe doivent être identique');</script>";
                   echo '
                  
                   <script type="text/javascript">
                   sweetAlert("OOps","les deux mots incorrects","error");
                   </script>
               
                  
                   ';
                  ///header("location:creationpanier.php");
                       
                 }
        }

      }
      if($requete->num_rows==1)
      {  
        
          header("location:creationpanier.php");
          echo '<script type="text/javascript"> alert("Cet email existe ");</script>';
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
 

              
  // echo "</script>";

?>
