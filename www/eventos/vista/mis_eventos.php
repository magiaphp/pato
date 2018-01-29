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

                       
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <h1><?php _t("Mis eventos"); ?></h1>                        
<table class="table">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Evento</th>
      <th scope="col">Precio</th>
      <th scope="col">accion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Fiesta del amor y la amistad</td>
      <td>
          Normal: 25,20<br>
          VIP: 25,20<br>
          Tribuna: 25,20 [+]
      </td>
      <td><a href="index.php?pag=detalles"><?php _t("Detalles"); ?></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
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
