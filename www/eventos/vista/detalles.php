<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo "$eventos_titulo"; ?>">
        <meta name="author" content="">
        <meta name="keywords" content="Les mots clés ici">
         <meta name="category" content="nom">
         <meta name="robots" content="valeurs">
         <meta name="distribution" content="valeur">
         <meta name="Description" content="Description de votre site...">
         <meta name="revisit-after" content="nombre">

        <title><?php echo "$eventos_titulo"; ?> - Mande.ec</title>


        <?php
        include "css.php";
        ?>

    </head>

    <body>

        <?php
        include "menu.php";
        ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <?php
                    include "barra_izq.php";
                    ?>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <p></p>


                    <div class="row">



                        <div class="card mb-4">
                            <?php /* <img class="card-img-top" src="http://lorempixel.com/700/401" alt="Card image cap"> */ ?>
                            <img class="card-img-top" src="imagenes/eventos/<?php echo "$eventos_id"; ?>.jpg" alt="Card image cap"> 
                            <div class="card-body">
                                <h2 class="card-title"><?php echo "$eventos_titulo"; ?></h2>
                                <p><?php echo categorias_segun_id($eventos_id_categoria); ?></p>

                                <h3 class="card-title">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>

                                    <?php echo "$eventos_fecha_inicio"; ?> / <?php echo "$eventos_precio"; ?> USD</h3>

                                <p class="card-text">

                                    <?php echo "$eventos_descripcion"; ?>
                                </p>



                            </div>                           
                            <?php
                            eventos_detalles_lugar($eventos_id);
                            ?>
                        </div>
                    </div> 
                    <?php
                    /**
                     * Beta
                     */
//include "tickets_venta.php"; 
//include "comentarios.php"; 
                    ?>

                    <?php /**
                     * 


                      <h2>Eventos relacionados</h2>




                      <div class="row">

                      <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://lorempixel.com/700/401" alt=""></a>
                      <div class="card-body">
                      <h4 class="card-title">
                      <a href="detalles.php">Item One</a>
                      </h4>
                      <h5>$24.99</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                      </div>
                      <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                      </div>
                      </div>



                      <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://lorempixel.com/701/401" alt=""></a>
                      <div class="card-body">
                      <h4 class="card-title">
                      <a href="detalles.php">Item One</a>
                      </h4>
                      <h5>$24.99</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                      </div>
                      <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                      </div>
                      </div>




                      <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="http://lorempixel.com/701/403" alt=""></a>
                      <div class="card-body">
                      <h4 class="card-title">
                      <a href="detalles.php">Item One</a>
                      </h4>
                      <h5>$24.99</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                      </div>
                      <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                      </div>
                      </div>









                      </div>
                     */
                    ?>













                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
            </div>
            <!-- /.container -->
        </footer>


        <script src="incluir/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="incluir/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>




        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
