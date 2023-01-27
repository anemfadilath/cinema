<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Formulaire d'ajout</title>
</head>
 <style type="text/css">
h1
{
  color:white;
  font-size: 25px;
  padding-top: 105px;
}
.div1
{
	background: #66400f6e;
	width: 400px;
	height: 1300px;
	margin: 5% auto;
	border-radius: 25px;

}
.btn
{
	border-radius: 20px;
	margin-bottom: 19px; 
    color:black;
    background-color:#66400f6e;
    border-color: black;
}
input{
	border-bottom-color: blue;
	border-top-color: blue;
	border-left-color: blue;
	border-right-color: blue;
	border-radius: 5px;
}
select{
	border-top-color: blue;
	border-bottom-color: blue;
	border-left-color: blue;
	border-right-color: blue;
	border-radius: 5px;
	
}
textarea{
	border-bottom-color: blue;
	border-top-color: blue;
	border-left-color: blue;
	border-right-color: blue;
	border-radius: 5px;

}
form input[type="text"], form input[type="text"],form select[name="langue"], 
form input[type="file"],form select[name="cat"]
{
  border: none;
  border-bottom: 3px solid black;
  background-color: #66400f6e;
  outline: none;
  height: 40px;
  display: 16px;
  color: black;
}
input::placeholder
{
  color:black;
}
textarea::placeholder{
	color: black;
}
input
{
   margin-top: 50px;
   width: 320px;
}
select{
   margin-top: 40px;
   width: 320px;
}
option{
	color:black;
}

p{
	color: black;
}
</style>


 <?php
require'verf_session_clt.php';
require 'verif_admin.php';
//recuperation du numero du produit a modifier depuis le script allprod.php
$num=$_GET['id'];
//echo $num;
//ouverture de connection
require 'connection.php';
//slectionner les information du produit a modifier
$based="select * from programme where num_prog=$num";
$recup=mysqli_query ($connection ,$based);
$film=mysqli_fetch_array($recup);
//print_r($film)
?>

<body background="back/proj.jpg">
	<a href=""><img src="image/log.png" width="200" height="80"></a>
	<div class=div1>
<form align="center" action="modifier.php" method="post">
	<h1>Formulaire d'ajout</h1>
	<input type="text" name="num" value=<?php echo "".$film['num_prog']; ?> readonly> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  
	   
	<input type="text" name="nom" placeholder="nom du film" id="input1" value="<?php echo $film['nom_prog']; ?>">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	
	<textarea rows="5" cols="40" name="desc" placeholder="description du film" >
	<?php echo $film['description']; ?></textarea>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type="text" name='date' placeholder="date de diffusion" value="<?php echo $film[3]; ?>">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type="text" name='heure' placeholder="heure de diffusion" value="<?php echo $film[2]; ?>">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name='realisa' placeholder="realisateur" value="<?php echo $film['realisateur']; ?>">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name='pays' placeholder="pays de realisation" value="<?php echo $film['pays']; ?>">
	 &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	      	
    <input type="text" name='duré' placeholder="durée du film" value="<?php echo $film[7]; ?>">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<select name="langue">
	    <option value="0"> Selectionez la langue de diffusion</option>
	    <option value="Arabe" <?php if($film['langue'] == 'Arabe') echo 'selected'?>>Arabe</option>
	    <option value="Français"  <?php if($film['langue'] == 'Français') echo 'selected'?>> Français</option>
	    <option value="Anglais"  <?php if($film['langue'] == 'Anglais') echo 'selected'?>>Anglais </option>
	</select>
	 &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name='prix' placeholder="prix des ticket" value="<?php echo $film[9]; ?>">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	 <select name="age_lim">
            <option value="0"> choisir une limite d'age</option>
            <option value="3ans +" <?php if($film['limite_age'] == '3ans +') echo 'selected'?>> 3ans &nbsp; +</option>
            <option value="10ans +" <?php if($film['limite_age'] == '10ans +') echo 'selected'?>> 10ans &nbsp; +</option>
            <option value="12ans +" <?php if($film['limite_age'] == '12ans +') echo 'selected'?>> 12ans &nbsp; +</option>
            <option value="16ans +" <?php if($film['limite_age'] == '16ans +') echo 'selected'?>> 16ans &nbsp;+</option>
            <option value="18ans +" <?php if($film[ 'limite_age'] == '18ans +') echo 'selected'?>> 18ans &nbsp;+</option>
     </select>     	
	    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
   	
	 <select name='resol'>
	 	
	     <option value="0"> choisir une resolution</option>
	     <option value="HD Ready(710p)" <?php if($film[11] == 'HD Ready(710p)') echo 'selected'?>> HD Ready(710p)</option>
	     <option value="Full HD(1080p)"<?php if($film[11] == 'Full HD(1080p)') echo 'selected'?>> Full HD(1080p)</option>
	     <option value="UHDTV1(2160px)"<?php if($film[11] == 'UHDTV1(2160px)') echo 'selected'?>> UHDTV1(2160px)</option> 
	     
	    </select>
	    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	     
	    	
	   
                  	
       <input type="file" name='image' value="<?php echo $film[12]; ?>">
	    <br>
	    <p> ajouter une image(max=200ko)<br>             	
    
	     <select name="genr">
	      	<option value="0"> Selectionez le genre du film</option>
	        <option value="Action" <?php if($film['genre'] == 'Action') echo 'selected'?>>Action</option>
	      	<option value="Horeur" <?php if($film['genre'] == 'Horeur') echo 'selected'?>> Horeur</option>
	        <option value="Comedie" <?php if($film['genre'] == 'Comedie') echo 'selected'?>> Comedie</option>
	      	<option value="Drame" <?php if($film['genre'] == 'Drame') echo 'selected'?>> Drame</option>
	      	<option value="thriler" <?php if($film['genre'] == 'thriler') echo 'selected'?>> thriler</option>
	      	<option value="Romance" <?php if($film['genre'] == 'Romance') echo 'selected'?>> Romance</option>
	      	<option value="Comedie-Musical" <?php if($film['genre'] == 'Comedie-Musical') echo 'selected'?>> Comedie-Musical</option>
	      	<option value="animation"  <?php if($film['genre'] == 'animation') echo 'selected'?>> Animation</option>
	      		
	    </select>             
	    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	    <select name="cat">
	    	<option value="0"> ajouter le film à</option>
	    	<option value="sortie semaine" <?php if($film[14] == 'sortie semaine') echo 'selected'?>> Sortie de la semaine</option>
	    	<option value="film affiche" <?php if($film[14] == 'film affiche') echo 'selected'?>> Film a l'affiche </option>
	    	<option value="prochainement" <?php if($film[14] == 'prochainement') echo 'selected'?>> Prochainement</option>
	    	<option value="accueil" <?php if($film[14] == 'accueil') echo 'selected'?>> accueil</option>
	    </select>
	    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;     
	<input  type="text" name='ticket' placeholder="nombre de ticket disponible" value="<?php echo $film[15]; ?>"><br><br>
  	<input   type="submit" value="enregistrer" class="btn btn-danger">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <input  type="reset" value="annuler" class="btn btn-danger">
    <a href='dashboard.php'><input   type='button' class='btn btn-danger' name='retour' value='retour'> </a>


</form>
</div>
</body>
</html>