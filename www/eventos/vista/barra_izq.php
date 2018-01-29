

<p></p>


<form class="form-signin" action="index.php" method="get">
    <input type="hidden" name="pag" value="buscar">
    
    

    

    <h1 class="h3 mb-3 font-weight-normal">Buscar</h1>


    <label for="donde" class="sr-only">Donde?</label>
    <input type="text" id="donde" name="donde" class="form-control" placeholder="Donde" required>        



    <label for="inputEmail" class="sr-only">Que buscas?</label>
    <select class="form-control" name="id_categoria" id="id_categoria">
        <?php categorias_add(); ?>
    </select>




    <label for="inputPassword" class="sr-only">Fecha?</label>
    
    <select class="form-control" name="cuando" id="cuando">
        <option value="0">Hoy, <?php echo fecha_corta(hoy()); ?></option>
        <option value="0">Mañana, <?php echo fecha_corta(manana()); ?></option>        
        <option value="7">Prox. 7 dias</option>
        <option value="15">Prox. 15 dias</option>
        <option value="30">Prox. 30 dias</option>        
        <option value="0">Todos</option>        
                
    </select>    


    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="sologratis" value="si"> Solo gratis
        </label>
    </div>


    <button class="btn btn-lg btn-primary btn-block" type="submit">Buscar</button>

</form>





<h3 class="my-4">Lugares</h3>


<?php
lugares_lista();
?>    
<h3 class="my-4">Ciudades</h3>
<?php 
lugares_ciudades(); 
?>
<h3 class="my-4">Categorias</h3>
<?php 
    categorias(); 
?>


<?php 
/*<h1 class="my-4">Lugares</h1>
<div class="list-group">
    <?php
    $cat = array("CCE", "Sala", "Sala max", "Cuenca", "Conocoto", "Duran");

    foreach ($cat as $val) {
        echo '<a href="index.php?pag=lugar&lugar=' . $val . '" class="list-group-item"><i class="fa fa-address-card" aria-hidden="true"></i> ' . $val . '</a>';
    }
    ?>  
    
     <a href="index.php?pag=lugares" class="list-group-item"><i class="fa fa-address-card" aria-hidden="true"></i> Todos</a>
</div>*/
?>


<h3 class="my-4"><?php _t("Registrar"); ?></h3>
<div class="list-group">
    <a href="index.php?pag=registrar_actividad" class="list-group-item"><i class="fa fa-address-card" aria-hidden="true"></i> <?php _t("Actividad"); ?></a> 
    <a href="index.php?pag=registrar_lugar" class="list-group-item"><i class="fa fa-address-card" aria-hidden="true"></i> <?php _t("Lugar"); ?></a> 
</div>

<?php 
/*
<h1 class="my-4"><?php _t("Mi panel"); ?></h1>
<div class="list-group">
    <a href="index.php?pag=mis_eventos" class="list-group-item"><i class="fa fa-address-card" aria-hidden="true"></i> <?php _t("Mis eventos"); ?></a> 
    <a href="index.php?pag=mis_lugares" class="list-group-item"><i class="fa fa-address-card" aria-hidden="true"></i> <?php _t("Mis lugares"); ?></a> 
    <a href="index.php?pag=mis_reservas" class="list-group-item"><i class="fa fa-address-card" aria-hidden="true"></i> <?php _t("Mis reservas"); ?></a> 
</div>
*/
?>




<p class="mt-5 mb-3 text-muted">&copy; <a href="https://robincoello.github.io/eventos-tema/">Eventos-tema</a> 2017-2018</p>
