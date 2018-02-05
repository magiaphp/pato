<?php 
 

if($sologratis){
    $comando = "(titulo LIKE '%$b%' OR descripcion LIKE '%$b%') AND (precio =0 )"; 
}else {
    $comando = "(titulo LIKE '%$b%' OR descripcion LIKE '%$b%')"; 
}




$comando = "SELECT * FROM eventos WHERE $comando    "; 

//$sql=mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ",$conexion) 
$sql=mysql_query("$comando Limit 0, 999 ",$conexion) 
        
or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .'  '.mysql_error());

// esto es para la paginacion	

$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));	  
