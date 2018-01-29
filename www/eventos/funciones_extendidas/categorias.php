<?php


function categorias() {
    global $conexion;        
    
    $sql = mysql_query(
            "SELECT categoria  FROM categorias   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    
    echo '<div class="list-group">';
    while ($reg = mysql_fetch_array($sql)) {
        echo '<a href="index.php?pag=buscar&b='.$reg[0].'" class="list-group-item"> <i class="fa fa-folder-o" aria-hidden="true"></i> '.$reg[0].'</a>'; 
    }    
    echo "</div>";     
}
function categorias_segun_id($id) {
    global $conexion;        
    
    $sql = mysql_query(
            "SELECT categoria  FROM categorias WHERE id = '$id'  ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
            
    if($reg[0]){
        return $reg[0];
    }else{
        false; 
    }        
            
}