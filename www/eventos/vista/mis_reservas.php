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


                       
                        
                        
                        

                    </div> 





                    <h1><?php _t("Mis reservas"); ?></h1>
                    
                    
                    <p>Detalle de las reservas que he realizado, el dueño del evento debe aprobarlas antes de cambiar su estatus</p>
                    


<table class="table">
  <thead>
    <tr>
      <th scope="col">Evento</th>
      <th scope="col">Fecha</th>
      <th scope="col">Reservas</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
      
      
    <tr>
      <th scope="row">Fiesta del amor y la amistad</th>
      <td>25 enero del 2018</td>
      <td>5 (Normal)</td>
      <td>Esn espera de aprobacion</td>
    </tr>
    
      
    <tr>
      <th scope="row">Fiesta del amor y la amistad</th>
      <td>25 enero del 2018</td>
      <td>5 (Normal)</td>
      <td>Anulado<br>
          Motivo: Se ha vendido mas de una </td>
    </tr>
    
      
    <tr>
      <th scope="row">Fiesta del amor y la amistad</th>
      <td>25 enero del 2018</td>
      <td>5 (Normal)</td>
      <td>Esn espera de aprobacion</td>
    </tr>
    
      
    <tr>
      <th scope="row">Fiesta del amor y la amistad</th>
      <td>25 enero del 2018</td>
      <td>5 (Normal)</td>
      <td>Esn espera de aprobacion</td>
    </tr>
    
      
    <tr>
      <th scope="row">Fiesta del amor y la amistad</th>
      <td>25 enero del 2018</td>
      <td>5 (Normal)</td>
      <td>Esn espera de aprobacion</td>
    </tr>
    
      
   
    
  </tbody>
</table>

















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
