<?php
require "connection.php";

$nom_clt=$_POST['nom'];

$prenom_clt=$_POST['prenom'];

$mail_clt=$_POST['mail'];

$date=$_POST['date_naissance'];

$pass=md5($_POST['mot_de_passe']);
//$pass= "aq1".sha1($pass."12354")."25";

$ins="insert into client values(null,'$nom_clt','$prenom_clt','$mail_clt',$date,'$pass')";
echo $ins;

$val=mysqli_query($connection,$ins);
header('location:connecxion.html');

mysqli_close($connection);


?>