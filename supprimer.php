<?php
require 'connection.php';
require 'trace.php';
//recuperation du numero de produit a supprime depuis la table allprod.php

$num=$_GET['num_film'];
//ouverture de la connection

//execution de requete SQL
$requete= "delete from programme where num_prog=$num";
trace($requete);
mysqli_query ($connection ,$requete);
//echo $requete;
header('location:dashboard.php');
mysqli_close($connection);
?>