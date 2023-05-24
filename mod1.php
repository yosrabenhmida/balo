<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nouveau.html">Nouveau</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mdifier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Supprimer</a>
            </li>
          </ul>
          
        </div>
      </nav>
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <br>
            <br> <center><h1 class="">Modifier Article</h1></center> <hr>
          </div>
        </div>
<?php
$id=$_GET["id"];
$modele="";
$marque="";
$description="";
$photo="";
$prix="";
$con=mysqli_connect("localhost","root","","lunette");
$req = "select * from article where id=$id";
$res = mysqli_query($con,$req);

while($ligne = mysqli_fetch_array($res)){
    $modele=$ligne[1];
    $marque=$ligne[2];
    $description=$ligne[3];
    $photo=$ligne[4];
    $prix=$ligne[5];
}
?>

        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-6">
        <form name=form1 method="POST" action="mod2.php">
            <input type="hidden" name="id" value="<?php echo($id);?>">
          <div class="form-group">
            <label for="modèle">Modèle</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Modèle" name="modele" value="<?php echo($modele);?>"> 
          </div>

          <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Marque" name="marque"  value="<?php echo($marque);?>">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Description" name="description"  value="<?php echo($description);?>">
          </div>

          <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Photo" name="photo"  value="<?php echo($photo);?>">
          </div>

          <div class="form-group">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix" name="prix"  value="<?php echo($prix);?>">
          </div>
          <br>

          <button type="submit" class="btn btn-outline-primary">Modifier</button>
          <button type="reset" class="btn btn-outline-success">Annuler</button>
        </form>
      </center>
      </div>
      <div class="col-md-3"></div>
</body>
</html>