<?php

/*
verifie si on est un administrateur quand on veut acceder a un fichier
si non admisistrateur renvoi vers authentification
*/
if ($_SESSION['droit']!="admin")
{

header('location:connecxion.html');
echo"<p color='red'>vous n'etes pas authentifier en tant qu'administrateur </p>";
}

?>