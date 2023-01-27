<?php
//$essaie=0;
//ouverture de connection
require 'connection.php';
//recuperation de donnee depuis connecxion
$mail_clt=$_POST['mail'];

$pass=md5($_POST['mot_de_passe']);

//$pass2= "aq1".sha1($pass."12354")."25";
//execution de requete select count(*) qui permet de voire combien de fois le mot de pass et la login existe dans le table client
$count="select count(*) from client where email='$mail_clt' and mot_de_passe='$pass' ";

//echo $count;
$recup=mysqli_query($connection,$count);
$data=mysqli_fetch_array($recup);
$nom="select * from client where email='$mail_clt' and mot_de_passe='$pass'";
$query=mysqli_query($connection,$nom);
$name=mysqli_fetch_array($query);

$count2="select count(*) from administrateur where mail='$mail_clt' and mot_de_passe='$pass' ";

$recup2=mysqli_query($connection,$count2);
$data2=mysqli_fetch_array($recup2);


//print_r($data);
//teste if :si le mot de pass et le login exite une fois 
if ($data[0]==1) {
    //echo"connection resusit";
	session_start();
	$_SESSION['user']=$name['nom_clt'];
	//echo "".$_SESSION['user'];
	$_SESSION['last']=time(); //determine le dernier temps d'acces 
	 $_SESSION['droit']='user';
	 echo"". $_SESSION['droit'];
	header('location:index_client.php');
	
}
elseif($data2[0]==1) {
    //echo"connection resusit";
	session_start();
	$_SESSION['user']='admin';
	//echo "".$_SESSION['user'];
	$_SESSION['last']=time(); //determine le dernier temps d'acces 
	 $_SESSION['droit']='admin';
	 echo"". $_SESSION['droit'];
	header('location:dashboard.php');
	
}

else
{
header('location:connecxion.html');
}


mysqli_close($connection);

?>