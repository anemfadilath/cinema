<!DOCTYPE html>
<html>
<script language="javascript">
//script jvascript pour verifier si des champs obligatoire  sont entre ou pas
		function verifier()

	{
			
			if (document.forms['inscription'].nom.value.length==0)
			{
				alert("attention: le champ nom est obligatoire");
			
			return false;
		}
		

		if (document.forms['inscription'].prenom.value.length==0)

			{
				alert("attention: le champ prenom est obligatoire");
			
			return false;
		}
		
		

		if (document.forms['inscription'].mail.value.length==0)

			{
				alert("attention: le champ mail est obligatoire");
	
			return false;
		}
		if (document.forms['inscription'].mot_de_passe.value.length==0)

			{
				alert("attention: le champ mot de pass est obligatoire");
			
			return false;
		}
		

		if(document.forms['inscription'].mot_passe_confi.value != document.forms['inscription'].mot_de_passe.value)
		{
			alert("attention : veuillrez saisir les meme mot de pass");
			return false;
		}
		if(document.forms['inscription'].mot_de_passe.value.length<7)
		{
			alert("attention : le mot de pass doit contenir au moins 7 lettre");
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
</head>
<style type="text/css">
	

body{
	background-image: url('back/cinema.jpg');
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


h1
{
	color:white;
	font-size: 25px;
	padding-top: 20px;
}


.div1
{
	background: radial-gradient(rgba(54,47,47,0.116), rgba(10,2,2,2));
	width: 550px;
	height: 600px;
	margin: 5% auto;
	border-radius: 25px;
}
p a{
	color: white;
	text-decoration: none;

}
p a:hover
{
	color: red;
}

input{
	border-radius: 5px;
	width: 150px;
	
}



#input2
{
   margin-top: 2px;
   width: 320px;
}
#input3
{
   margin-top: 30px;
   width: 320px;
}
#input4
{
   margin-top: 30px;
   width: 320px;
}
#input5
{
   margin-top: 30px;
   width: 320px;
}
#input6
{
   margin-top: 30px;
   width: 320px;
}
#input1
{
   margin-top: 30px;
   width: 320px;
}
.btn
{
  border-radius: 20px;
  margin-top: 20px;
  
}
input::placeholder
{
	color: white;
}
input::[type="Date"]
{
	background-color: white;
}
form input[type="text"], form input[type="text"],form input[type="email"], form input[type="date"],form input[type="password"],form input[type="password"]
{
	border: none;
	border-bottom: 3px solid #ffffff;
	background-color: transparent;
	outline: none;
	height: 40px;
	display: 16px;
	color: white;
}

</style>
<body>
 <a class="nav-link" href="index.php"> <img src="image/log.png" alt="logo" style="width:190px; margin-right: 50px;margin-top: 2px;"></a>

	
	<title> Inscription</title>
<body>
	<div class="div1">
<form  align="center"action="enregi_client.php" method="post"onsubmit="return verifier()" name="inscription">
   <h1> Formulaire d'inscription</h1>
    <input type="text" name="nom" placeholder="Nom" id="input1"> <br>
	<input type="email" name="mail" placeholder="mail" id="input3"><br>

	<input type="password" name="mot_de_passe"placeholder="mot de pass" id="input5"> 
   <br>
	<input type="password" name="mot_passe_confi" placeholder="confirmez le mot de pass" id="input6">
	<br>
	<input type="submit" value="valider"class="btn btn-danger">  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="annuler" class="btn btn-danger">
    <p><a href="connecxion.html"> connectez vous ici</a></p><br>

</form>
</div>
</body>
</html>
