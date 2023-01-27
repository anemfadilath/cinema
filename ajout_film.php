<?php
require 'connection.php';
require 'trace.php';
//require 'verif_admin.php';
//require'verf_session_clt.php';

$nom=$_POST['nom'];

$descrip=$_POST["desc"];

$heur_dif=$_POST['heure'];

$date_dif=$_POST['date'];

$real=$_POST['realisa'];

$pays=$_POST['pays'];

$durée=$_POST['duré'];

$lang_dif=$_POST['langue'];

$prix=$_POST['prix'];

$age=$_POST['age_lim'];

$resolution=$_POST['resol'];

$unik=uniqid();
//if($_FILES ['image']['error']){
	//header('location:formulair_ajout.php');
	
	//echo"<font color='red' font-size='25px'>Les probleme d'attachement de la photo</font>";

//else if($_FILES['image']['size']>1500000) 
	//echo"taille de la photo trop grande";
//}
//else if($_FILES['image']['type']!="image/jpeg"&&$_FILES['photo']['type']!="image/jpg" &&$_FILES['image']['type']!= "image/png") {
     //header('location:formulair_ajout.php');
	//echo "<font color='red' font-size='25px'> attention au type de la photo</font>";}


move_uploaded_file($_FILES['image']['tmp_name'], 'photos/'.$unik.'.jpeg');

$genre=$_POST['genr'];

$cat=$_POST['cat'];

$nbr_ticket=$_POST['ticket'];

$ajout="insert into programme values(null,'$nom','$heur_dif','$date_dif','$descrip','$real','$pays','$durée','$lang_dif',$prix,'$age','$resolution','$unik','$genre', '$cat',$nbr_ticket,null)";
trace($ajout);
//echo"".$ajout;	
$query=mysqli_query($connection,$ajout);
header('location:formulair_ajout.php');
mysqli_close($connection);
?>