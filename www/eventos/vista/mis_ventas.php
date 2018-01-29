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

                    <?php
                    include "carrusel.php";
                    ?>

                    <div class="row">


                        <h2><?php _t("Mis actividades"); ?></h2>
                        
                        
            
                        
                        
                        
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Actividad</th>
      <th scope="col">Lugar</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
      
    
      
    
      
    <tr>
      <th scope="row">Feria de la manzana</th>
      <td>VIP</td>
      <td>1</td>
      <td>25,00</td>
    </tr>
    
    
    <tr>
      <th scope="row">200</th>
      <td>Tarima</td>
      <td>50,00</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">300</th>
      <td>Balcon</td>
      <td>75,00</td>
      <td><a href="index.php?pag=tickets_comprar"><?php _t("Comprar"); ?></a></td>
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


        <script src="incluir/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="incluir/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>




        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
