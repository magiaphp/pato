<?php
 $sql=mysql_query("INSERT INTO lugares 
           
    (
    id,
    id_contacto,
    nombre,
    descripcion, 
    pais, 
    provincia,
    ciudad,
    sector,
    cpostal,
    direccion,
    transversal,
    extra_direccion,
    tel,
    email,
    sitio_web,
    estatus)
    
    VALUES


    (NULL,     
    '$lugares_id_contacto',
    '$lugares_nombre',
    '$lugares_descripcion', 
    '$lugares_pais', 
    '$lugares_provincia',
    '$lugares_ciudad',
    '$lugares_sector',
    '$lugares_cpostal',
    '$lugares_direccion',
    '$lugares_transversal',
    '$lugares_extra_direccion',
    '$lugares_tel',
    '$lugares_email',
    '$lugares_sitio_web',
    '$lugares_estatus')
        
  ",$conexion) or die ("Error: ".mysql_error());   

     
/*    (NULL,     
    '$lugares_id_contacto',
    '$lugares_nombre',
    '$lugares_descripcion', 
    '$lugares_pais', 
    '$lugares_provincia',
    '$lugares_ciudad',
    '$lugares_sector',
    '$lugares_cpostal',
    '$lugares_direccion',
    '$lugares_transversal',
    '$lugares_extra_direccion',
    '$lugares_tel',
    '$lugares_email',
    '$lugares_sitio_web',
    '$lugares_estatus')*/ 