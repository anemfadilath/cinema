<?php
//trace les different activité sur l'app
function trace($query)
{
	$f=fopen ("../logs/trace2.log","a+");
	$ch=$_SESSION['user'].'|'.$query.'|'.date('Y/M/D H:N:S').'|'.$_SERVER['REMOTE_ADDR'];
	fputs($f,$ch);
	fputs($f,"\r\n");
	fclose($f);
}
?>