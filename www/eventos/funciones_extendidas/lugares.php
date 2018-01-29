<?php




/**
 * 
 */

function lugares_lista() {
    global $conexion;        
    
    $sql = mysql_query(
            "SELECT nombre  FROM lugares   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    
    echo '<div class="list-group">';
    while ($reg = mysql_fetch_array($sql)) {
        echo '<a href="index.php?pag=index&b='.$reg[0].'" class="list-group-item"> <i class="fa fa-folder-o" aria-hidden="true"></i> '.$reg[0].'</a>'; 
    }    
    echo "</div>";     
}



function lugares_ciudades() {
    global $conexion;        
    
    $sql = mysql_query(
            "SELECT DISTINCT ciudad  FROM lugares   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    
    echo '<div class="list-group">';
    while ($reg = mysql_fetch_array($sql)) {
        echo '<a href="index.php?pag=buscar&b='.$reg[0].'" class="list-group-item"> <i class="fa fa-folder-o" aria-hidden="true"></i> '.$reg[0].'</a>'; 
    }    
    echo "</div>";     
}