 <?php
$email = $_POST["email"];
$password = $_POST["password"];
$con=mysqli_connect("localhost","root","","lunette");
$req = "select * from admin where email='$email' and password = '$password '";
$res = mysqli_query($con,$req);
$cpt = 0;
while($ligne = mysqli_fetch_array($res))
{
   $cpt++;
}
if($cpt==1)
header("Location:magasin.html");
else
header("Location:connexion.php");

?>
