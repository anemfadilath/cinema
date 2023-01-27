<?php
  include 'connection.php';
 // require 'verification.php';
  require'verf_session_clt.php';
?>
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
    
    <link rel="stylesheet" type="text/css" href="css/index.css">
    

    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--fin lien BOX ICONS-->
    <!--Carousel lien-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!--fin carousel lien-->
   <title>CineShop</title>
   <style type="text/css">
    /*General css*/
body
{
    margin: 0;
    padding: 0;
    background-color: black;

}
.btn
{
    border-radius: 20px;
}

p{
    color: white;
}

span {
    color:white;
}
em{
    color: white;
}

i{
    background-color: white;
}
.item-contenu-titre h1
{
   font-size: 45px;
}

 h1
    {
        font-size: 20px;
        color: white;
        margin-right: 10px;
    }
.ligne1
{
    background-color: white;
    width: 200px;
    height: 10px;
    margin-right: 20px;
}

.ligne2
{
    background-color: white;
    width: 400px;
    height: 10px;
    margin-left: 100px;
}
/*Fin General css*/

/*css de la navbar*/
.navbar {
    background-color: white;
    font-size: 12px;
    border-bottom: 1px solid black;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-weight: bold;
}
.nav-pills .nav-link{
    color: black !important;
    text-align: center;
    padding-top: 
}
.nav-pills .nav-link.active,  .nav-pills .nav-link:hover{
    color: #d82c2e !important;
    background-color: white !important;
}
.navbar-toggler{
    color: black !important;
    border-style: none;
}

a i{
    font-size: 40px;
    color: black;
    padding: 20px;
    display: inline-block;
    margin-top: 30px;

}
a i:hover{
  color:blue;
}

.idc{
    margin-top: 10px;
}

.nav-item .nav-link button 
{
    margin-left: 10px;
}
/*Fin css de la navbar*/

/* image de fond carousel */
    
    .header-slide-item {
        padding-top: 48%;
        position: relative;
        overflow: hidden;
    }
    
    .header-slide-item img {
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        height: 150%;
    }
    
    .header-slide-item-contenu {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        color: var(--text-color);
        display: flex;
    }
    
    .item-contenu-wraper {
        padding-left: 5rem;
        width: 40%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }
    
    .item-contenu-wraper::before {
        content: "";
        position: absolute;
        top: 0;
        left: 100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
    }
    
    .item-contentu-titre {
        font-size: 5rem;
        line-height: 5rem;
        font-weight: 900;
    }
    
   
    .item-contenu-description {
        font-size: 1.15rem;
        margin-top: var(--space-top);
        line-height: 1.5rem;
    }
    
    .item-action {
        margin-top: var(--space-top);
    }
    
    .carousel-nav-center {
        position: relative;
    }
    
    .carousel-nav-center .owl-nav button em {
        font-size: 3rem;
    }
    
    .carousel-nav-center .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .carousel-nav-center .owl-nav .owl-prev {
        position: absolute;
        left: 5px;
    }
    
    .carousel-nav-center .owl-nav .owl-next {
        position: absolute;
        right: 5px;
    }
    
    .owl-nav button {
        border: none;
        outline: none;
    }
    
    .owl-nav button em {
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
    }
    
    .owl-nav button:hover em {
        color: var(--main-color);
    }
    
    .top-down {
        transform: translateY(-50px);
        visibility: hidden;
        opacity: 0;
        transition: 0.5s ease-in-out;
    }
    
    .delay-2 {
        transition-delay: 0.2s;
    }
    
    .delay-4 {
        transition-delay: 0.4s;
    }
    
    .delay-6 {
        transition-delay: 0.6s;
    }
    
    .delay-8 {
        transition-delay: 0.8s;
    }
    
    .owl-item.active .top-down {
        transform: translateY(0);
        visibility: visible;
        opacity: 1;
    }
/*  fin image de fond carousel */


/*image css  sorties de projection*/
  .contenu-item {
        display: block;
        position: relative;
        overflow: hidden;
        padding-top: 120%;
        cursor: pointer;
    }
    
    .contenu-item img {
        position: absolute;
        top: 0;
        left: 0;
        width: 80%;
        transition: transform 0.3s linear;
    }
   
    
    .contenu-item:hover img {
        transform: scale(1.2);
    }
    
    .contenu-item-contenu {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 5px;
        background-color: rgba(0, 0, 0, 0.8);
    }
    
    .contenu-item-contenu::before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 0;
        width: 100%;
        height: 100px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
    }
    
    .contenu-item-titre {
        
        font-size: 1.5rem;
        position: relative;
        font-weight: 700;
    }
 .section {
        padding-top: 150px;
    }
    
    .section-header {
        margin-bottom: 30px;
        padding-left: 20px;
        text-transform: uppercase;
        font-size: 1.5rem;
        font-weight: 700;
        border-left: 4px solid var(--main-color);
        display: flex;
        align-items: center;
    }

/*Fin css sorties de projection*/

/*Responsivité*/
 @media only screen and (max-width: 1280px) {
        html {
            font-size: 14px;
        }
        .header-slide-item {
            padding-top: 50%;
        }
        .item-contenu-wraper {
            width: 50%;
        }
    }
    
    @media only screen and (max-width: 250px) {
        html {
            font-size: 12px;
        }
        .container {
            padding: 0 15px;
        }
        .header-slide-item {
            height: max-content;
            padding-top: unset;
        }
        .header-slide-item img {
            height: 100%;
        }
        .item-contenu-wraper {
            width: 100%;
            height: 100%;
            padding-bottom: 20px;
            padding-right: 5rem;
            background-color: rgba(0, 0, 0, 0.2);
        }
        .header-slide-item-contenu {
            position: relative;
        }
        .item-contenu-titre {
            font-size: 3rem;
        }
        
    }

/*footer*/
    
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
	<!-- Navbar -->
 	<nav class="navbar navbar-expand-xl navbar-dark sticky-top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars fa-lg"></i>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
        	
            <ul class="nav nav-pills navbar-nav">
            	<li class="nav-item"><a class="nav-link" href=""> <img src="image/log.png" alt="logo" style="width:140px; margin-right: 50px;margin-top: 2px;"></a></li>

                <li class="nav-item idc"><a class="nav-link" href="">Accueil</a></li>

                <li class="nav-item idc"><a class="nav-link" href="#sortie">sortie de la semaine</a></li>

                <li class="nav-item idc"><a class="nav-link" href="#affiche">film à l'affiche</a></li>

                <li class="nav-item idc"><a class="nav-link" href="#prochainement">Prochainement</a></li>

                <li class="nav-item idc"><a class="nav-link" href="Apropos.php">A Propos</a></li>

                <li class="nav-item "><a class="nav-link" href="deconnect.php"><button class="btn btn-danger">deconnection</button></a></li>

                
              
                
            </ul>
        </div>
    </nav>
    <!-- Fin Navbar -->
    
  <!-- section 1 -->
    <!-- section 1 -->
    <div class="header-section">
        <div class="header-slide">
            <div class="owl-carousel carousel-nav-center" id="header-carousel">
                
<?php
                    require 'connection.php';
$select="select * from programme where categorie='accueil'";
$query=mysqli_query($connection,$select);
while($film=mysqli_fetch_array($query))
{
 echo"<div class='header-slide-item'>";
echo"<img src=photos/".$film['photo'].".jpeg id='".$film['num_prog']."' alt=''>";
echo"<div class='overlay'></div>";                
echo" <div class='header-slide-item-contenu'>";
echo"<div class='item-contenu-wraper'>";
echo"<div class='item-contenu-titre top-down'>";
echo"<h1>".$film['nom_prog']."</h1>";
    echo"</div>";
echo "<div class='item-contenu-description top-down delay-4'>";
echo"<p>".$film['description']."</p>";
echo" </div>";
echo" <div class='class=item-action top-down delay-6'>";
   echo" <a href='info_film.php?num_film=$film[0]' class='btn btn-hover'>
            <button class='btn btn-danger regarder'>Achetez Maintenant</button>
                                </a>
                             </div>";
echo" </div>";
echo" </div>";
echo" </div>";
                
}
 mysqli_close($connection);
 ?>                 
</div>
</div>
</div>

                 
         <!-- SORTIE DE LA SEMAINE -->
        <div class="section" id="sortie">
            <div class="container">
                <div class="section-header">
                    <div class="ligne1"></div><h1>Sortie De La Semaine</h1><div class="ligne2"></div>
                </div>

                <div class="owl-carousel carousel-nav-center contenu-slide">
                   <!--affichage des different sortie de la semaine -->
<?php
    require 'connection.php';
$select="select * from programme where categorie='sortie semaine'";
$query=mysqli_query($connection,$select);
while($film=mysqli_fetch_array($query))
{
 echo" <a href='info_film.php?num_film=$film[0]' class='contenu-item'>";
 echo "<img src=photos/".$film['photo'].".jpeg id='".$film['num_prog']."' alt=''>";
echo"   <div class='contenu-item-contenu'>";
echo  "   <div class='contenu-item-titre'>";
echo "<h1>".$film['nom_prog']."</h1>";
echo  "</div>";
    echo  "</div>";
    echo "</a>";

 
   

}
 mysqli_close($connection);
 ?>                        
                       
 </div>
</div>
</div>

        <!--SORTIE DE LA SEMAINE -->                 
        
         <!-- FILM A L'AFFICHE -->
        <div class="section" id="affiche">
            <div class="container">
                <div class="section-header">
                    <div class="ligne1"></div><h1>Film A L'affiche</h1><div class="ligne2"></div>
                </div>

                <div class="owl-carousel carousel-nav-center contenu-slide">

                    <!-- affichage des film a l'affiche -->

<?php
                    require 'connection.php';
$select="select * from programme where categorie='film affiche'";
$query=mysqli_query($connection,$select);
while($film=mysqli_fetch_array($query))
{
 echo" <a href='info_film.php?num_film=$film[0]' class='contenu-item'>";
 echo "<img src=photos/".$film['photo'].".jpeg id='".$film['num_prog']."' alt=''>";
echo"   <div class='contenu-item-contenu'>";
echo  "   <div class='contenu-item-titre'>";
echo "<h1>".$film['nom_prog']."</h1>";
echo  "</div>";
    echo  "</div>";
    echo "</a>";
 echo "</a>";
 
   
}
 mysqli_close($connection);
 ?>                        
           
</div>
</div>
</div>


         <!-- PROCHAINEMENT -->
        <div class="section" id="prochainement">
            <div class="container">
                <div class="section-header">
                    <div class="ligne1"></div><h1>Prochainement</h1><div class="ligne2"></div>
                </div>

                <div class="owl-carousel carousel-nav-center contenu-slide">
                    <!-- affichege des film :prochainement-->
    <?php
                    require 'connection.php';
$select="select * from programme where categorie='prochainement'";
$query=mysqli_query($connection,$select);
while($film=mysqli_fetch_array($query))
{
 echo" <a href='info_film.php?num_film=$film[0]' class='contenu-item'>";
 echo "<img src=photos/".$film['photo'].".jpeg id='".$film['num_prog']."' alt=''>";
echo"   <div class='contenu-item-contenu'>";
echo  "   <div class='contenu-item-titre'>";
echo "<h1>".$film['nom_prog']."</h1>";

echo  "</div>";
    echo  "</div>";
    echo "</a>";
 echo "</a>";

 
}
 mysqli_close($connection);
 ?>                                
                    <!-- FIN ITEM 6 SORTIE DE LA SEMAINE -->
                </div>
            </div>
        </div> 
        <!--PROCHAINEMENT -->                 
        <!-- Fin section 4 -->
        

         
        <div class="contact" style="margin: 10% auto;background-color: rgba(191,170,143,0.07);height: 290px; width: 400px;" >
            <h1 style="color: white; text-align: center; padding-top: 10px;font-size: 30px;">Contact</h1>
            <input type="email" name="" placeholder="Entrez votre Mail" class="element" style="margin-left: 28%; margin-top: 20px;"><br>
            <textarea class="element" style="margin-left: 12%;  margin-top: 20px;" cols="40" rows="4" placeholder="Entrez votre Message"></textarea><br>
            <button class="btn btn-danger" style="margin-left: 30%;width: 150px;">Envoyer</button>
        </div>
        

      <footer style=" margin-top: 100px;position: relative;background-color: rgba(191,170,143,0.07);text-align:center;">
            <!-- COPYRIGHT SECTION -->
            <div style="padding: 10px;border-top: 1px solid #181616;background-color: rgba(191,170,143,0.07);">
                <p>Copyright 2021</p> 
                
                
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram' style="background-color:rgba(191,170,143,0.07);"></i></a>
                <a href=""><i class='bx bxl-facebook-square' style="background-color:rgba(191,170,143,0.07);"></i></a>
            </div>
        </footer>

     <!-- script jquery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>
     <!-- fin script jquery-->

     <!-- OWL CAROUSEL js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
     <!-- fin du script -->

     <!--script js du projet-->
        <script src="js/app.js"></script>
        <script src="js/app2.js"></script>
     <!-- fin du script -->


</body>
</html>