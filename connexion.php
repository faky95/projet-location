<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
<center>
<div class="container">
<div id="d1">
  <h2 class="text-uppercase text-success">Page de Connection</h2>
  <form method="POST" class="form-horizontal" action="#">
    <div class="form-group">
      <label class="control-label col-sm-2" for="">profil</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="profil" placeholder="profil" name="profil">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Password:</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
       <a href="#"> <input type="button" name="conn" class="btn btn-success" value="Connexion" id="conn"></a>
      </div>
    </div>
<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">S'inscrire</button>
    <div id="alert" class="alert alert-danger col-lg-4  lindor">
    <strong>Danger!</strong>Veuillez remplir les champs!
  </div>

  </form>
  </div>

</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
        <!-- ***formulaireutilisateur -->
        <form method="POST" action="userobj.php">
        <div class="form-group row">
        <label  class="col-md-2" for="">Numeropiece</label>
        <input class="form-control col-md-4 input" type="text" name="Numeropiece" value="" placeholder="">
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="">Nom utilisateur:</label>
        <input  class="form-control col-md-4 input" type="text" name="nomcomplet" value="" placeholder="">
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="">Prenom:</label>
        <input  class="form-control col-md-4 input" type="text" name="Prenom" value="" placeholder="">
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="">Tel:</label>
        <input  class="form-control col-md-4 input" type="text" name="Tel" value="" placeholder="">
    </div>
    <div class="form-group row">
        <label  class="col-md-2" for="">Login:</label>
        <input class="form-control col-md-4 input" type="text" name="login" value="" placeholder="">
    </div>
     <div class="row">
         <label  class="col-md-2" for="">Mot de passe:</label>
          <input class="form-control col-md-4 input" type="password" name="password" value="" placeholder="">
    </div>
    <div class="row">
         <label  class="col-md-2" for="">Profil:</label>
         <select  class="col-md-2 bg-success" name="profil" id="select">
           <option value=""></option>
           <option value="agent">Agent</option>
           <option value="admin">Admin</option>
           <option value="gérant">Gérant</option>
           <option value="Proprietaire">Proprietaire</option>
           </select>
    </div>
          <button class="btn btn-success" type="submit" name="enregistrer" value="">enregistrer</button>

    </form>
        <!-- *** -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</center>

<?php
if (isset($_POST["conn"])) {
    extract($_POST);
    if(!empty ($profil)){
if($profil=='Admin') {
    header ("location: adminn.php");
    $_SESSION['$profil']=$profil;
}
elseif($profil=='Agent') {
    header ("location: accueil.php");
    $_SESSION['$profil']=$profil;

}

elseif($profil=='Gerant') {
    header ("location: gerant.php");
    $_SESSION['$profil']=$profil;

}

elseif($profil=='Proprietaire') {
    header ("location: proprietaire.php");
    $_SESSION['$profil']=$profil;

}


}
else {
  echo 'profil incorrect';

}
}



?>
<script src="connexion.js"></script>
</body>
<style>
body{
  background-image:url(vendre-un-bien-immobilier.jpg);
  background-repeat:no-repeat;
  background-size:1300px;
}
#select{
    margin-left:13px;
}
#alert{
    position:relative;
    left:200px;
    bottom:60px;

}
</style>
</html>