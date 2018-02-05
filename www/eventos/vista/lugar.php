<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop Homepage - Start Bootstrap Template</title>


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


                        <!-- Blog Post -->
                        <div class="card mb-4">
                            
                            <?php /*<img class="card-img-top" src="http://lorempixel.com/700/400" alt="Card image cap">*/?>
                            
                            <img class="card-img-top" src="./imagenes/lugares/grandes/<?php echo "$lugares_id"; ?>.jpg" alt="Card image cap">
                            
                            
                            
                            <div class="card-body">
                                <h2 class="card-title"><?php echo "$lugares_nombre ($lugares_ciudad)"; ?></h2>

                                
                                <p class="card-text">

                                   <?php 
                                   echo "$lugares_descripcion"; 
                                   ?>

                                </p>



                            </div>
                            <div class="card-footer text-muted">
                                
                                <?php echo "$lugares_direccion y $lugares_transversal <br> "
                                        . "$lugares_cpostal $lugares_ciudad<br>"
                                        . "$lugares_provincia - $lugares_pais<br>"
                                        . "Tel: $lugares_tel<br>"; ?>
                                <br>
                                <br>
                                
                                Actualizado el: 2 de enero del 2018, 
                                <a href="index.php?pag=lugares">Otros lugares</a>
                            </div>
                        </div>

                    </div> 


                    <?php 
                 //   include "comentarios.php"; 
                    ?>








<?php 
/*                    <h2 class="card-title">Eventos en este lugar</h2>








                    <div class="row">

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="http://lorempixel.com/700/404" alt=""></a>
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
                    <!-- /.row -->*/
?>
                    

<?php 
/// <h2>Otros lugares en: Quito   </h2>                 
//include "./lugaress.php"; 
?>

                    
                    

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
