<?php
require 'connection.php';
//require 'verif_admin.php';
require 'verif_admin.php';
require'verf_session_clt.php';
require 'trace.php';
$num=$_POST['num'];
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

//$unik=uniqid();
//if($_FILES ['image']['error']){
	//header('location:formulair_ajout.php');
	//echo"<font color='red' font-size='25px'>Les probleme d'attachement de la photo</font>";

//else if($_FILES['image']['size']>1500000) 
	//echo"taille de la photo trop grande";
//}
//if($_FILES['image']['type']!="image/jpeg"&&$_FILES['photo']['type']!="image/jpg" &&$_FILES['image']['type']!= "image/png") {
     //header('location:formulair_ajout.php');
	//echo "<font color='red' font-size='25px'> attention au type de la photo</font>";}


//move_uploaded_file($_FILES['image']['tmp_name'], 'photos/'.$unik.'.jpeg');

$genre=$_POST['genr'];

$cat=$_POST['cat'];

$nbr_ticket=$_POST['ticket'];

$modif="UPDATE programme set nom_prog ='$nom'
where num_prog=$num";
trace($modif);
//echo"".$modif;	
$query=mysqli_query($connection,$modif);
$modif2="UPDATE programme set heure_dif ='$heur_dif',date_dif='$date_dif'where num_prog=$num";
trace($modif2);


//echo"".$modif2;	
$query=mysqli_query($connection,$modif2);
$modif3="UPDATE programme set description ='$descrip'
where num_prog=$num";
trace($modif3);
//echo"".$modif3;	
$query=mysqli_query($connection,$modif3);

$modif4="UPDATE programme set pays='$pays'
where num_prog=$num";
//echo"".$modif4;
trace($modif4);	
$query=mysqli_query($connection,$modif4);

$modif5="UPDATE programme set 7='$durée'
where num_prog=$num";
trace($modif5);
//echo"".$modif5;	
$query=mysqli_query($connection,$modif5);

$modif6="UPDATE programme set langue='$lang_dif',prix='$prix',limite_age='$age',resolution='$resolution',genre='$genre' , categorie='$cat',nombre_ticket=$nbr_ticket
where num_prog=$num";
trace($modif6);
//echo"".$modif6;	
$query=mysqli_query($connection,$modif6);

header('location:dashboard.php');
mysqli_close($connection);
?>