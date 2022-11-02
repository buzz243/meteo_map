<?php
     $ar="erto";
     $br="ertoj";
     if($ar==$br){
         echo "egau";
         header("location:formulaire.html");
     } 
     if(!($ar==$br)){
        echo "not egau";
        header("location:creationpanier.php");
    }
?>