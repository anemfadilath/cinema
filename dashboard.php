<!DOCTYPE html>
<html>
    <head>
        <title>Cineshop</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    </head>
  

  <style type="text/css">
    body 
{
    background: url(../images/bg.png);
}
.site
{
    font-family: 'Holtwood One SC', sans-serif;
}
.text-logo
{
    font-family: 'Holtwood One SC', sans-serif;
    color: #e7480f;
    text-shadow: 2px 2px #ffd301;
    font-size: 50px;
    padding: 40px 0px;
    text-align: center;
}
.text-logo .glyphicon 
{
    color: #ffd301;
    text-shadow: 0px 0px #ffd301;
}
.nav
{
   margin-bottom: 40px;
}
.thumbnail img
{
    background: #ffd301;
}
.price
{
    background: #5cb85c;
    box-shadow: 0 1px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px rgba(0,0,0,0.2);
    -webkit-box-shadow: 0 1px rgba(0,0,0,0.2);
    color: #fff;
    text-shadow: 2px 2px #333;
    position: absolute;
    right: 6px;
    top: 20px;
    padding: 5px 10px;
    font-size: 20px;
    border-radius: 3px;
}
.price:before 
{
    border: 4px solid transparent;
    border-bottom: 4px solid #4a934a;
    border-left: 4px solid #4a934a;
    content: "";
    position: absolute;
    right: 1px;
    top: -8px;
}
.caption > h4
{
    color: #e7480f;
    font-size: 18px;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover
{
    background: #e7480f;
}
.nav>li>a:focus, .nav>li>a:hover 
{
    color: #e7480f;
    background-color: #eee;
}
.nav>li>a
{
    color: #eee;
    font-size: 18px;
    text-shadow: 2px 2px #333;
}
.btn-order
{
    width: 100%;
    padding: 10px;
    font-size: 16px;
    color: #fff;
    background-color: #e7480f;
    text-decoration: none;
    text-shadow: 2px 2px #333;
}
.btn-order:hover, .btn-order:focus
{
    color: #fff;
    background-color: #c13c0d;
}

/*  ADMIN */

.admin
{
    background: #fff;
    padding: 5px;
    border-radius: 10px;
    margin-left: 200px;
    margin-top: 30px;

}
.help-inline
{
    color: red;
}
#image
{
  width: 350px;
  height: 250px;
  margin-top: 50%;
}
#logo
{
  margin-left: 33%;
}
body
{
 
}
</style>
<body>

        <img src="image/log.png" id="logo">
        <div class="container admin">
            <div class="row">
                <h1><strong>Liste des films au proramme</strong><a href="formulair_ajout.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>realisateur</th>
                      <th>pays</th>
                      <th>durée</th>
                      <th>langue</th>
                      <th>Date de diffusion</th>
                      <th>heure de diffusion</th>
                      <th>genre</th>
                      <th>photo</th>
                      <th>prix</th>
                      <th>nombre de tickets</th>
                      <th>Categorie</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require 'connection.php';
                      
$select="select * from programme ";
$query=mysqli_query($connection,$select);
while($film=mysqli_fetch_array($query))
{
                        
                            echo '<tr>';
                            echo '<td>'. $film['nom_prog'] . '</td>';
                            echo '<td>'. $film['description'] . '</td>';
                            echo '<td>'. $film['realisateur'] . '</td>';
                            echo '<td>'. $film['pays'] . '</td>';
                            echo '<td>'. $film[7] . '</td>';
                            echo '<td>'. $film['langue'] . '</td>';
                            echo '<td>'. $film['Date_dif'] . '</td>';
                            echo '<td>'. $film['heure_dif'] . '</td>';
                            echo '<td>'. $film['genre'] . '</td>';
                            echo '<td>'. "<img id='image'src=photos/".$film['photo'].".jpeg id='".$film['num_prog']."'>" . '</td>';
                            echo '<td>'. $film['prix'] . 'dh' . '</td>';
                            echo '<td>'. $film['nombre_ticket'] . '</td>';
                            echo '<td>'. $film['Categorie'] . '</td>';
                            echo '<td width=500>';
                            
                            echo "<a class='btn btn-default' href='voir.php?num_film=$film[0]'><span class='glyphicon glyphicon-eye-open'></span> Voir</a>";
                              
                          
                            echo "<a class='btn btn-primary' href='formulaire_modif.php?num_film=$film[0]'><span class='glyphicon glyphicon-pencil'></span> Modifier</a>";
                              echo "<br>";
                          
                            echo "<a class='btn btn-danger' href='supprimer.php?num_film=$film[0]'><span class='glyphicon glyphicon-remove'></span> Supprimer</a>";
                              
                            echo '</td>';
                            echo '</tr>';
                        }
                        
                      ?>
                  </tbody>
                </table>
            </div>
        </div>     
</body>
</html>