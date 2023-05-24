<?php
$modele=$_POST["modele"];
$marque=$_POST["marque"];
$description=$_POST["description"];
$photo=$_POST["photo"];
$prix=$_POST["prix"];
$con=mysqli_connect("localhost","root","","lunette");
$req="INSERT INTO article values(Null, '$modele','$marque','$description','$photo',$prix)";
$res=mysqli_query($con,$req);
echo("hello");//header("Location:lister.php");
?>