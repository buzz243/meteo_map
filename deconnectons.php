<meta charset="utf-8">
<?php 
      
      session_start();
      
      if(session_destroy()){
         
         header("location:index.php?jemesuisdeconnecté(e)");

      }


?>