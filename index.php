<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
     *{box-sizing: border-box;}
  html,body{height:100%;}
  .login-card{
    width:100%;
    padding:70px 30px 44px;
    text-align: center;

  }
  .login-card >h2{
    margin:0 0 12px ;
    font-size:36px;
    font-weight: 600;

  }
  .login-form{
    width:100%;
    margin:0;
    display:grid;
    gap: 16px;

  }
  @keyframes pan{
     100%{background-position: 15% 50%;}
  }
 
  .avatar{
    width: 200px;
    height: 100px;
    border-radius: 50%;
    padding-bottom:auto;
  }
  body{
    display:grid;
    place-items: center;
    margin: 0;
    background-size:cover;
    animation:pan 6s infinite alternate linear;
  }
  </style>
</head>

<body  class="bg-white" >

<?php 
      
      session_start();
      require('decore.php');
     
   
      //include "configue.inc.php";
      //$connec = new mysqli("localhost","root","","gestion_supermarcher");
     // include 'styleadmin.php';?>

 <?php //afficher_menu_accueil();btn-success?>

<?php
/*echo '
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
</nav> ';*/

?>
 <br><br><br>
  <script type="text/javascript" href="lib/js/bootstrap.js">
</script>
 

<div class="container" 
   id="blocarticle" class="row" align="center" class="col-md-4">

   <div class="row justify-content-center" >

      <div class="col-lg-45 bg-white mt-35 px-0 " >
        
      <img src="Logo METTELSAT.jpg"  class="avatar"/>
     
  


<div >
  <div id="formulaireconnexion" class="login-card ">
  
     <div class="row">
            <form action="logini.php" method="post" class="login-form" style="margin:50px;" >
           
            <div class="form-group has-sucess">
            <label for="nom" style="color:white;font-size: 22px;">Votre email</label>
            <input type="email"  id="nom" name="nom"  placeholder="Votre email : marc@gmail.com"  class="form-control"  required="required">
        </div><br>

             


             <div class="form-group">
            <label for="Email" style="color:white;font-size: 22px;">Votre mot de passe</label>
            <input type="password"  style="width:300px;" id="Email" name="password"  placeholder="Votre mot de passe" class="form-control"  required="required">
        </div>

       
       
           


    


         


      <br>
        <input  name="seconnecter"  style="border-radius: 20px;" type="submit" value="Se connecter" class="btn btn-primary active">
        <a  href="creationpanier.php"  style="border-radius: 20px;" class="btn btn-primary active"> Créer un compte
        </a>
     
    
    
</form>


</div>

</div>

</div>
</body>
</html>
