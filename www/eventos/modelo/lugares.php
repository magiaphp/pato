<?php


$sql = mysql_query("SELECT * FROM lugares ", $conexion) or die("Error:" . mysql_error());

$reg = mysql_fetch_array($sql); 



