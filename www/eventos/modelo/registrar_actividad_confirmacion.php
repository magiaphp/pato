<?php
 $sql=mysql_query("INSERT INTO eventos 
           
    (
    id,
    id_contacto,
    id_categoria,
    id_lugar, 
    id_publico, 
    titulo, 
    descripcion,
    fecha_inicio,
    hora_inicio,
    fecha_fin,
    hora_fin,
    precio,
    youtube,
    visitas,
    orden,
    estatus)
    
    VALUES


    (NULL, 
    '$eventos_id_contacto',  
    '$eventos_id_categoria',  
    '$eventos_id_lugar',  
    '$eventos_id_publico',  
    '$eventos_titulo',  
    '$eventos_descripcion',  
    '$eventos_fecha_inicio',  
    '$eventos_hora_inicio',  
    '$eventos_fecha_fin',  
    '$eventos_hora_fin',  
    '$eventos_precio',  
    '$eventos_youtube',  
    '$eventos_visitas',  
    '$eventos_orden',  
    '$eventos_estatus' )
        




  ",$conexion) or die ("Error: ".mysql_error());   

     
 
 
 
 

/*
$sql = "INSERT INTO eventos ( 
 id_contacto 
 ,  id_categoria 
 ,  id_lugar 
 ,  id_publico 
 ,  titulo 
 ,  descripcion 
 ,  fecha_inicio 
 ,  hora_inicio 
 ,  fecha_fin 
 ,  hora_fin 
 ,  precio 
 ,  youtube 
 ,  visitas 
 ,  estatus 
 ) VALUES ( 
 :id_contacto 
 ,  :id_categoria 
 ,  :id_lugar 
 ,  :id_publico 
 ,  :titulo 
 ,  :descripcion 
 ,  :fecha_inicio 
 ,  :hora_inicio 
 ,  :fecha_fin 
 ,  :hora_fin 
 ,  :precio 
 ,  :youtube 
 ,  :visitas 
 ,  :estatus 
   )";
$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":id_contacto" => "1"
    , ":id_categoria" => "1"
    , ":id_lugar" => "1"
    , ":id_publico" => "1"
    , ":titulo" => "$ eventos_titulo"
    , ":descripcion" => "$ eventos_descripcion"
    , ":fecha_inicio" => "2010-10-10"
    , ":hora_inicio" => "3600"
    , ":fecha_fin" => "2010-10-10"
    , ":hora_fin" => "3600"
    , ":precio" => "10"
    , ":youtube" => "video"
    , ":visitas" => "100"
    , ":estatus" => "0"
        /*
    ":id_contacto" => "$eventos_id_contacto"
    , ":id_categoria" => "$eventos_id_categoria"
    , ":id_lugar" => "$eventos_id_lugar"
    , ":id_publico" => "$eventos_id_publico"
    , ":titulo" => "$eventos_titulo"
    , ":descripcion" => "$eventos_descripcion"
    , ":fecha_inicio" => "$eventos_fecha_inicio"
    , ":hora_inicio" => "$eventos_hora_inicio"
    , ":fecha_fin" => "$eventos_fecha_fin"
    , ":hora_fin" => "$eventos_hora_fin"
    , ":precio" => "$eventos_precio"
    , ":youtube" => "$eventos_youtube"
    , ":visitas" => "$eventos_visitas"
    , ":estatus" => "$eventos_estatus"
        )
);


if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$sql" => "$sql"
    );

    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}
 * 
 */