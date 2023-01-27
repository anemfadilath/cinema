<?php

?>
<!DOCTYPE html>
<html>
<script language="javascript">
//script jvascript pour verifier si des champs obligatoire  sont entre ou pas
		function verifier2()

	{
			
			if (document.forms['"ajout"'].nom.value.length==0)
			{
				alert("attention:le nom du film est obligatoire");
			
			return false;
		}
		

		if (document.forms['"ajout"'].desc.value.length==0)

			{
				alert("attention: vous devez mettre une description");
			
			return false;
		}
		
		

		if (document.forms['"ajout"'].heure_dif.value.length==0)

			{
				alert("attention: vous devez ajouter une heure de diffusion");
	
			return false;
		}
		if (document.forms['"ajout"'].date.value.length==0)

			{
				alert("attention:vous devez ajouter la date de diffusion");
			
			return false;
		}
		
		if(document.forms['"ajout"'].langue.value==0)
		{
			alert("attention :vous devez ajouter la langue de diffusion");
			return false;
		}

		if(document.forms['"ajout"'].prix.value.length==0)
		{
			alert("attention :vous devez ajouter la prix du ticket");
			return false;
		}
     if(document.forms['"ajout"'].heure.value.length==0)
		{
			alert("attention :vous devez ajouter l'heure de diffusion");
			return false;
		}
    if(document.forms['"ajout"'].duré.value.length==0)
		{
			alert("attention :vous devez ajouter la durée du film");
			return false;
		}

    if(document.forms['"ajout"'].genr.value==0)
		{
			alert("attention :vous devez ajouter le genre du film");
			return false;
		}
		if(document.forms['"ajout"'].age_lim.value==0)
		{
			alert("attention :vous devez ajouter la limite d'age");
			return false;
		}


      if(document.forms['"ajout"'].cat.value==0)
		{
			alert("attention :vous devez remplire le champ 'ajouter film a'");
			return false;
		}

    if(document.forms['"ajout"'].ticket.value.length==0)
		{
			alert("attention :vous devez ajouter le nombre de ticket");
			return false;
		}





    }


</script>
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
	background: radial-gradient(rgba(54,47,47,0.116), rgba(10,2,2,2));
	width: 800px;
	height: 1500px;
	margin: 5% auto;
	border-radius: 25px;
}
.btn
{
	border-radius: 20px;
	margin-bottom: 19px; 
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
form input[type="text"], form input[type="text"],form select[name="langue"], form select[name="genr"],form select[name="resol"],form select[name="pays"],form select[name="age_lim"],form textarea[name="desc"]
,form input[type="file"],form select[name="cat"]
{
	border: none;
	border-bottom: 3px solid #ffffff;
	background-color: transparent;
	outline: none;
	height: 40px;
	display: 16px;
	color:white;
}
input::placeholder
{
  color:white;
}
textarea::placeholder{
	color: white;
}
input
{
   margin-top: 40px;
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
	color: white;
}
</style>
<body background="back/proj.jpg">
	<a href=""><img src="image/log.png" width="200" height="80"></a>
	<div class=div1>
<form align="center" action="ajout_film.php" method="post" enctype="multipart/form-data" onsubmit="return verifier2()" name="ajout">
	<h1>Formulaire d'ajout</h1>      
	<input type="text" name="nom" placeholder="nom du film" id="input1">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="5" cols="40" name="desc" placeholder="description du film"></textarea>
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="date" placeholder="date de diffusion">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="heure" placeholder="heure de diffusion">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="realisa" placeholder="realisateur">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="pays" placeholder="pays de realisation">
	 &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	      	
    <input type="text" name="duré" placeholder="durée du film">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<select name="langue">
	    <option value="0"> Selectionez la langue de diffusion</option>
	    <option value="Arabe">Arabe</option>
	    <option value="Français"> Français</option>
	    <option value="Anglais">Anglais </option>
	</select>
	 &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="prix" placeholder="prix des ticket">
	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	 <select name="age_lim">
            <option value="0"> choisir une limite d'age</option>
            <option value="3ans +"> 3ans &nbsp; +</option>
            <option value="10ans +"> 10ans &nbsp; +</option>
            <option value="12ans +"> 12ans &nbsp; +</option>
            <option value="16ans +"> 16ans &nbsp;+</option>
            <option value="18ans +"> 18ans &nbsp;+</option>
     </select>     	
	    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
   		
	 <select name="resol">
	     <option value="0"> choisir une resolution</option>
	     <option value="HD Ready(710p)"> HD Ready(710p)</option>
	     <option value="Full HD(1080p)"> Full HD(1080p)</option>
	     <option value="UHDTV1(2160px)"> UHDTV1(2160px)</option> 	     		
	    </select>
	    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    
                  	
       <input type="file" name="image">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	    <br>
	    <br>             	
    
	     <select name="genr">
	      	<option value="0"> Selectionez le genre du film</option>
	        <option value="Action">Action</option>
	      	<option value="Horeur"> Horeur</option>
	        <option value="Comedie"> Comedie</option>
	      	<option value="Drame"> Drame</option>
	      	<option value="thriler"> thriler</option>
	      	<option value="Romance"> Romance</option>
	      	<option value="Comedie-Musical"> Comedie-Musical</option>
	      	<option value="animation"> Animation</option>
	      		
	    </select>             
	    &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	    <select name="cat">
	    	<option value="0"> ajouter le film à</option>
	    	<option value="sortie semaine"> Sortie de la semaine</option>
	    	<option value="film affiche"> Film a l'affiche</option>
	    	<option value="prochainement"> Prochainement</option>
	    	<option value="accueil"> accueil</option>
	    </select>
	    <br><br>	     
	<input  type="text" name="ticket" placeholder="nombre de ticket disponible"><br><br>
  	<input   type="submit" value="enregistrer" class="btn btn-danger">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <input  type="reset" value="annuler" class="btn btn-danger">
    <a href='dashboard.php'><input   type='button' class='btn btn-danger' name='retour' value='retour'> </a>


</form>
</div>
</body>
</html>