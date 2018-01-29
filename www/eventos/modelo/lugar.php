<?php

$sql = mysql_query("SELECT * FROM lugares WHERE id = '$lugares_id'  ", $conexion)or die("Error: en el fichero:" . __FILE__ . ' linea: ' . __LINE__ . ' / ' . mysql_error());
$lugares = mysql_fetch_array($sql);


include "./gestion/lugares/reg/reg.php";




