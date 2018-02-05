<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Web- Start Bootstrap Template</title>


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
                        <div class="col-lg-12">

                            <form class="form-inline" action="index.php" method="get">
                                <input type="hidden" name="pag" value="buscar" >
                                
                                <div class="form-row align-items-center">      
                                    <div class="col-auto">
                                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <select class="form-control" name="d">
                                                        <option value="eventos"><?php _t("Eventos"); ?></option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="b" name="b" placeholder="">
                                        </div>
                                    </div>


                                    <div class="col-auto">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="gratis" name="sologratis" value="si">
                                            <label class="form-check-label" for="gratis">
                                                <?php _t("solo gratis"); ?>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2"><?php _t("Buscar"); ?></button>
                                    </div>            
                                </div>
                            </form>


                        </div>
                    </div>







                    <div class="row">
                        <?php
                        $i = 1; // cuenta lineas
                        while ($eventos = mysql_fetch_array($sql)) {
                            include "./gestion/eventos/reg/reg.php";
                            include "./temas/pato/www/eventos/vista/eventos.php";
                            $i++;
                        }
                        //include "eventos.php";
                        ?>
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
