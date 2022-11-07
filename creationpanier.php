<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="lib/sweetalert/sweetalert.css" />
  <style>
  .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  </style>
</head>

<body  class="" >

<?php 
      
      session_start();
      require('decore.php');
      //Enregistrez-vous
     
   
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
 
<br><br><br>
<div class="container" id="blocarticle" class="row" align="center" class="col-md-4">

   <div class="row justify-content-center" >

      <div class="col-lg-148 bg-light mt-148 px-10" >
      <img src="Logo METTELSAT.jpg"  class="avatar"/>
   
      <h3 class="text-center text-light   btn-primary active  p-13">   </h3>
  



  <div id="formulaireconnexion">
     <div class="row">
            <form action="enregistreuser.php" method="post" style="margin:50px;" >
            <div class="form-group has-sucess">
            <label for="nom"></label>
            <input type="email" id="nom" name="nom" class="form-control" placeholder="Votre email"  required="required">
        </div><br><br>
        
             <div class="form-group">
            <label for="Email"></label>
            <input type="password" id="Email" name="password" placeholder="Votre mot de passe" class="form-control"  required="required">
        </div>
        
        <div class="form-group">
            <label for="Emailp"></label>
            <input type="password" id="Emailp" placeholder="Confirmez-le" name="passwordi" class="form-control"  required="required">
        </div>

       



         


      <br>
      
        <input  name="seconnecter" style="margin: 20px;border-radius: 20px;" onclick=" lire();" type="submit" value="Créez un compte" class="btn btn-primary active">
      
     
   
</form>
<script src="sweetalert.min.js"></script>

<script type="text/javascript">
    function lire(){
    ///swal("OOps","les deux mots correct","success");
    var a = document.getElementById('Email').value;
    var b = document.getElementById('Emailp').value;
    var chin=a.length; //tail de mot de  de passe
    //alert(chin.length);
    if(a!=b){
             
        sweetAlert("Regret","les deux mots de passe non conformes ","error");

    }
    if(a==b){
          
       if(chin>=8){
    //  swal("Satisfaction","les deux mots de passe correct","success");
    } 
    if(chin<8){
             
             sweetAlert("Regret ","le passe doit avoir une longueur supérieure à ou égale à 8","error");
     
         }   
      //sweetAlert("OOps","les deux mots de passe non conformes ","error");
     
         }
   
    
   }
    //alert("bien");
    </script>

</div>

</div>


</body>
</html>
