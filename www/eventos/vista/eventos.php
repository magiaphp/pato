


    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="index.php?pag=detalles"><img class="card-img-top" src="http://lorempixel.com/700/40<?php echo $i; ?>" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="index.php?pag=detalles&id=<?php echo "$eventos_id"; ?>"><?php echo "$eventos_titulo"; ?></a>
                </h4>
                
                <p><?php echo fecha_corta($eventos_fecha_inicio); ?></p>
                
                <h5><?php echo eventos_preciof($eventos_precio) ?></h5>
                
                <p class="card-text"><?php echo eventos_descripcion($eventos_id, 100); ?></p>
            </div>
            <div class="card-footer">
                <?php /*<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>*/?>
                <?php echo categorias_segun_id($eventos_id_categoria); ?> en 
                    <?php echo lugares_campo("ciudad", $eventos_id_lugar); ?>
            </div>
        </div>
    </div>              

