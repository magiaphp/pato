<?php echo "
<div class=\"card-footer text-muted\">                                
    <h2>$lugares_nombre</h2>
    <p><a href=\"index.php?pag=lugar&id=$lugares_id\">Más eventos de este lugar</a></p>
    <br><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
    $lugares_direccion y $lugares_transversal<br>
    <i class=\"fa fa-phone\"></i> Tel: $lugares_tel <br>
    <i class=\"fa fa-map-marker\"></i> $lugares_ciudad - $lugares_pais<br>                                                               
    <a href=\"index.php?pag=lugares\">Otros lugares</a>
</div>"; ?>