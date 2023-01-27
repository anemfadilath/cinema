<?php
  require 'connection.php';
  require'verf_session_clt.php';
require 'trace.php';
  ?>
<?php
 require 'connection.php';
 if(!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['adresse']) and !empty($_POST['ville']) and !empty($_POST['code']) and !empty($_POST['ticket']) and !empty($carte = $_POST['carte'])){
   
   $id = $_GET['numfilm'];
   

   $nom = $_POST['nom'];
   $email = $_POST['email'];
   $carte = $_POST['carte'];
   $adresse = $_POST['adresse'];
   $ville = $_POST['ville'];
   $code= $_POST['code'];
   $ticket = $_POST['ticket'];
   $emailA = "cineshop@gmail.com";
   
   $mailexist = "select count(*) from client where email='$email'";
   $recup=mysqli_query($connection,$mailexist);
   $data=mysqli_fetch_array($recup);
  
   $reqfilm = "select * from programme where num_prog=$id";
   $recup2=mysqli_query($connection,$reqfilm);
   $data2=mysqli_fetch_array($recup2);
   

   if($data[0] == 1)
   {
        $ticket_restant = $data2['nombre_ticket'];
        if($ticket < $ticket_restant){
          $nom_film = $data2['nom_prog'];
          $prix = $data2['prix'];
          $prix *=$ticket;

          $headers = "De: $nom  <$email>\r\nEnvoyé par: $email\r\nNombre de ticket: $ticket\r\nprix total: $prix";
          mail($emailA, "Achat", $nom_film, $headers);
           $ticket_restant-=$ticket;
          $modif3="UPDATE programme set nombre_ticket ='$ticket_restant'
where num_prog=$id";
trace($modif3);
//echo"".$modif3; 
$query=mysqli_query($connection,$modif3);

          header('location: Achat.php?achat_effectué=1');
        }
        else{
          header('location: Achat.php?ticket=0');
        }
        
        
     }
   
   else
   {
      header('location: Achat.php?error_achat=1');
   }
 }
mysqli_close($connection);
?>
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
   
   <title> Formulaire d'Achat</title>
   
</head>
<style type="text/css">
	

body{
	background-image: url('back/cinema.jpg');
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
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
	height: 650px;
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
   margin-top: 23px;
   width: 320px;
}
#input3
{
   margin-top: -10px;
   width: 320px;
}
#input4
{
   margin-top: 30px;
   width: 320px;
}
#input5
{
   margin-top: 2px;
   width: 320px;
}
#input6
{
   margin-top: 30px;
   width: 320px;
}
#input7
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
  margin-top: 30px;

 
  
}
#btn1
{
   margin-left: 2px;
   width: 300px;
}

input::placeholder
{
	color: white;
}

form input[type="text"], form input[type="text"],form input[type="email"],form input[type="number"]
{
	border: none;
	border-bottom: 3px solid #ffffff;
	background-color: transparent;
	outline: none;
	height: 40px;
	display: 16px;
	color: white;
}
select{
	border: none;
	border-bottom: 3px solid  black;
	margin-left: 30px;
	outline: none;
	height: 40px;
	
	
}
.error
{
  text-align: center;
  background-color: red;
  color: white;
  width: 50%;
  margin-left: 25%;
  height: 50%;
}
.succes
{
  text-align: center;
  background-color: green;
  color: white;
  width: 50%;
  margin-left: 25%;
  height: 50%;
}
</style>
<body>
 <a class="nav-link" href="index.php"> <img src="image/log.png" alt="logo" style="width:190px; margin-right: 50px;margin-top: 2px;"></a>
	
  <?php
  if(isset($_GET['achat_effectué']))
  {
     echo "<p color='green' font-size='25px' class='succes'>Achat effectué avec succès. Veuillez consulter votre boite mail</p>";
  }
  
  ?>
  <?php
   if(isset($_GET['error_achat']))
   {
     echo "<p color='red' font-size='25px' class='error'>Adresse email incorrect.</p>";
   }
  ?>

  <?php
   if(isset($_GET['ticket']))
   {
     echo "<p color='red' font-size='25px' class='error'>Ticket insuffisant</p>";
     
   }
  ?>
  <div class="div1">
  	
    <form  align="center" action="" method="POST" name="formulaire" >
		
     <h1> Formulaire d'achat</h1>

      

    <input type="text" name="nom" placeholder="Nom" id="input1" required>
	  </p><br>

	 
	  <input type="email" name="email" placeholder="Email" id="input3" required> 
	  <br>
    
    <input type="text" name="adresse" placeholder="adresse" id="input2" required>
	  <br>

	 
	  <input type="text" name="ville" placeholder="ville" id="input4" required>
	  <br>
    
    <input type="text" name="carte" placeholder="Numero de carte bancaire" id="input7" required>
    </p><br>
	  
	  <input type="text" name="code" placeholder="code postale" id="input5" required> 
    <br>
    <input type="number" name="ticket" placeholder="nombre de ticket" id="input6" required> 
    <br>
	  
	 
	  <input type="submit" value="valider"class="btn btn-danger"  id="btn1" name="inscription">

	  
      
    </form>
    
    
    
 </div>
 
