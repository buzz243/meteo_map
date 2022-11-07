<?php
  $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));
$bdg= new PDO('mysql:host=localhost;dbname=logino','root','');

$sql= "SELECT * from utilisateur WHERE email='martupty'";
    $retp =  $bdg->prepare($sql);
    $retp->execute();
    if($retp->rowCount() > 0)
    {

    //    session_regenerate_id();
        $data=  $retp->fetchAll();
        echo $retp->rowCount();
       // header("location:formulaire.php");
    }
    if(!$retp->rowCount() > 0)
    {

    //    session_regenerate_id();
        $data=  $retp->fetchAll();
        echo $retp->rowCount();
       // header("location:formulaire.php");
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