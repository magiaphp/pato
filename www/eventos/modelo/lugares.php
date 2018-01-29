<?php


$sql = mysql_query("SELECT * FROM lugares ORDER BY orden DESC, provincia, ciudad, nombre ", $conexion) or die("Error:" . mysql_error());

//$reg = mysql_fetch_array($sql); 



