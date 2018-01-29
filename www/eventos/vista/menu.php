<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><?php echo $config_nombre_web; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
<?php 
/*                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><?php _t("Inicio"); ?>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>*/
?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pag=registrar_actividad"><?php _t("Registrar Actividad"); ?></a>
                </li>
                
                
            </ul>

            
            <form class="form-inline mt-2 mt-md-0" action="./gestion/index.php">
                
                
                
                <input class="form-control mr-sm-2" type="text" placeholder="Usuario" aria-label="Search">
                <input class="form-control mr-sm-2" type="text" placeholder="clave" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            

        </div>
    </div>
</nav>