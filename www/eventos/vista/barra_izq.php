

<p></p>


<form class="form-signin" action="index.php">

    <input type="hidden" name="pag" value="index">


    <h1 class="h3 mb-3 font-weight-normal">Buscar</h1>

    <label for="inputEmail" class="sr-only">Que buscas?</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Actividad" required autofocus>

    <label for="inputPassword" class="sr-only">Donde?</label>
    <input type="text" id="inputPassword" class="form-control" placeholder="Donde" required>        

    <label for="inputPassword" class="sr-only">Fecha?</label>
    <input type="text" id="inputPassword" class="form-control" placeholder="Fecha" required>


    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Solo gratis
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
