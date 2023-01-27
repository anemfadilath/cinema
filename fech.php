<?php 

require 'connection.php';
$select="select * from programme";
$query=mysqli_query($connection,$select);
while($film=mysqli_fetch_array($query))
echo"<img width=80 height=100 src=photos/".$film['photo'].".jpeg id='".$film['num_prog']."' width='80' height='100'> ";
mysqli_close($connection);
 ?>