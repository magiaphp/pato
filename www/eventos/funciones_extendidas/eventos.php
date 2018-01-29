<?php





function eventos_detalles_lugar($id_evento) {
    global $conexion;        
    
    $sql = mysql_query(
            "SELECT *  FROM lugares WHERE id = '$id_evento'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);            
    $lugares = mysql_fetch_array($sql);    
    include "gestion/lugares/reg/reg.php";         
    include "temas/pato/www/eventos/vista/detalles_lugar_detalles.php";                               
}


function eventos_descripcion($id_evento, $largo) {
    global $conexion;        
    
    $sql = mysql_query(
            "SELECT descripcion  FROM eventos WHERE id = '$id_evento'   ", $conexion) or error(__DIR__, __FILE__, __LINE__);            
    $reg = mysql_fetch_array($sql);    
    return $r = substr($reg[0], 0, $largo);
}

function eventos_preciof($precio){
    return $precio = ($precio <= 0 )?" <font color=\"red\">Gratis</font> ":"$precio USD"; 
}
