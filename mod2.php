<?php
$id=$_POST["id"];
$modele=$_POST["modele"];
$marque=$_POST["marque"];
$description=$_POST["description"];
$photo=$_POST["photo"];
$prix=$_POST["prix"];
$con=mysqli_connect("localhost","root","","lunette");
$req="update article set modele='$modele', marque='$marque', description='$description', photo='$photo', prix=$prix where id=$id";
echo $req;
mysqli_query($con,$req);
header("Location:modifier.php");


?>