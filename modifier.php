<html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarText">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="admin.html">Accueil</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="nouveau.html">Nouveau</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="lister.php">Liste</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="modifier.php">Modifier</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="supprimer.php">Supprimer</a>
     </li>
   </ul>
   
 </div>

</nav>
<div class="container">

<div class="row">
  <div class="col-md-12">
    <br>
    <br> <center><h1 class="">Listes Articles (Modification)</h1></center> <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-2">
    
  </div>
  <div class="col-md-8">
<br>

    <br>
    <table class="table">
<thead class="thead-dark">
<tr>
  
  <th scope="col">ID</th>
  <th scope="col">Modele</th>
  <th scope="col">Marque</th>
  <th scope="col">Description</th>
  <th scope="col">Photo</th>
  <th scope="col">Prix</th>
  <th scope="col">Action</th>
</tr>
</thead>

<?php
$con=mysqli_connect("localhost","root","","lunette");
$req='select * from article';
$res=mysqli_query($con,$req);
//echo("");
while ($ligne=mysqli_fetch_array($res)){
    echo("<tr><td>$ligne[0]<td>$ligne[1]<td>$ligne[2]<td>$ligne[3]<td>$ligne[4]<td>$ligne[5]<td><a href='mod1.php?id=$ligne[0]'><button type=button class='btn btn-danger'>Modifier</button></a>");
}
?>

 </center>
      </div>
      <div class="col-md-2"></div>
</body>
</html>