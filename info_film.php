<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrp css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <!--  script css du projet -->
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<title></title>
	<style>
  body {
   
    margin: 0;
    padding: 0;
    background-color: black;
    background-image: url(back/cinema.jpg);

}
p{
	color: white;
	text-align: center;

}
#im1{
	height: 300px;
	margin-left: 550px;
	margin-top: 80px;
}
.contenue{
	border:3px solid white;
	width: 1300px;
	margin:10% auto;
	background: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7));
}
input{
	
	margin-bottom:30px;

}

#btn1{
	
	border-radius: 20px;
	margin-right: 500px;
	margin-left: 560px;
}




  </style>

</head>
<body>
<?php
require 'connection.php';
require 'visiteur.php';

$num=$_GET['num_film'];
$based="select * from programme where num_prog=$num";
$recup=mysqli_query ($connection ,$based);
$film=mysqli_fetch_array($recup);
echo"<a class='nav-link' href=''> <img src='image/log.png' alt='logo' style='width:180px; margin-right: 50px;margin-top: 8px;'></a>";
echo "<div class='contenue'>";
echo "<img id='im1'src=photos/".$film['photo'].".jpeg id='".$film['num_prog']."'>";
echo"<p > TITRE:". ' '.$film['nom_prog']."</p>";

echo"<p id='DESC'> DESCRIPTION:". ' '.$film['description']."<br>"."</p>";
echo"<p > DUREE:". ' '.$film[7]."</p>";
echo"<p > dates de diffusion:". ' '.$film[3]."</p>";
echo"<p > pays:". ' '.$film['pays']."</p>";
echo"<p > langue de diffusion:". ' '.$film['langue']."</p>";
echo"<p > limite d'age:". ' '.$film[10]."</p>";
echo"<p > genre:". ' '.$film['genre']."</p>";
echo"<p > resolution:". ' '.$film['resolution']."</p>";
echo"<p > prix par ticket:". ' '.$film['prix'].'dhs'."</p>";

echo"<a href='Achat.php?numfilm=$film[0]'> <input id='btn1' type='button' class='btn btn-danger' name='acheter' value='acheter maintenant'> </a>";


echo"</div>";
?>

</body>
</html>