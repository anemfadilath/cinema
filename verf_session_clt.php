<?php
session_start();

if (!isset($_SESSION['user']))
header('location:connecxion.html');

//echo "bonjour ".$_SESSION['user']. " &nbsp&nbsp" ;
?>''