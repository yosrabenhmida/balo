<?php 
$id=$_GET["id"];
$req="delete from article 
where id=$id";
$con=mysqli_connect("localhost","root","","lunette");
mysqli_query($con,$req);
echo("lunette a été supprimer");
header("location:supprimer.php");
?>