<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $a; ?>Web- Start Bootstrap Template</title>


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

                    <?php
                    include "carrusel.php";
                    ?>

                    <div class="row">












                        <h1><?php _t("Mis lugares"); ?></h1>                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Lugar</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">accion</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>     
                                    <td>Casa de la cultura ecuatoriana</td>
                                    <td>Quito</td>
                                    <td><a href="index.php?pag=detalles"><?php _t("Esperando aprobacion"); ?></a></td>
                                </tr>

                                <tr>     
                                    <td>Cafe bar</td>
                                    <td>Quito</td>
                                    <td><a href="index.php?pag=detalles"><?php _t("En linea"); ?></a></td>
                                </tr>



                                <tr>     
                                    <td>Cafe 123 de la gare</td>
                                    <td>Quito</td>
                                    <td><a href="index.php?pag=detalles"><?php _t("Bloqueado"); ?></a></td>
                                </tr>





                            </tbody>
                        </table>




































                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <?php
        include "footer.php";
        ?>

        <script src="includes/bootstrap-400/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="includes/bootstrap-400/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        
        
    </body>
</html>
