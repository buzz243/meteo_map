<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body  class="bg-dark" >

<?php 
      
      session_start();
      require('decore.php');
     
   
      //include "configue.inc.php";
      //$connec = new mysqli("localhost","root","","gestion_supermarcher");
     // include 'styleadmin.php';?>

 <?php //afficher_menu_accueil();?>


   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="creationpanier.php">Créez un compte <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="deconnectons.php">Se déconnecter</a>
      </li>
     
    </ul>
  </div>
</nav>


 
  <script type="text/javascript" href="lib/js/bootstrap.js">
</script>
 

<div class="container" id="blocarticle" class="row" align="center" class="col-md-4">

   <div class="row justify-content-center" >

      <div class="col-lg-45 bg-light mt-45 px-0" >
   
      <h3 class="text-center text-light btn-success p-3"> Se connecter </h3>
  



  <div id="formulaireconnexion">
     <div class="row">
            <form action="logina.php" method="post" style="margin:50px;" >
            <div class="form-group has-sucess">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" class="form-control"  required="required">
        </div><br><br>

               <div class="form-group has-sucess">
            <label for="nom">Postnom:</label>
            <input type="text" id="nom" name="postnom" class="form-control"  required="required">
        </div><br><br>

             <form class="form-block" style="margin:50px;"  required="required">
            <div class="form-group has-sucess">
            <label for="nom">Prénom:</label>
            <input type="text" id="nom" name="prenom" class="form-control"  required="required">
        </div><br><br>


             <div class="form-group">
            <label for="Email">Mot de passe:</label>
            <input type="password" id="Email" name="password" class="form-control"  required="required">
        </div>

       

           


      <br>


         


      <br>
        <input  name="seconnecter" type="submit" value="Se connecter" class="btn btn-primary active">
      
     
    
    <form action="modifiepanier.php" method="post">
             <input type="submit" name="btn_return" class="btn btn-danger" value="Modifiez votre compte"/>
           </form>

</form>


</div>

</div>


</body>
</html>
