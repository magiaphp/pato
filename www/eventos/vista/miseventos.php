<?php 
include "./admin/funciones/traductor.php"; 
?>
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
        include "mi_menu.php";
        ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <?php
                    include "mi_barra_izq.php";
                    ?>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <?php
                    include "carrusel.php";
                    ?>

                    
                    
                    
                    
                    
                    
                    <h1><?php _t("Mis eventos"); ?></h1>                    
                    <div class="row">

                       
                        <?php 
                       // include "./eventos.php"; 
                        ?>



            
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  
                  <th>Titulo</th>
                  <th>Fecha</th>
                  <th> Comentarios</th>
                  <th>accion</th>
                </tr>
              </thead>
              <tbody>

                  
                  
                  
                      <?php   
    $i=0; 
    $cat = array(
        "Fiesta del verano", 
        "Mama Llacta en Otavalo", 
        "Cancion para todos", 
        "almuerzo de solidaridd con castro", 
        "Cuenca y sus fiestas", 
        "Conocoto hace un pedido ", 
        "Duran sale a la luz con los testimonis");
    
    foreach($cat as $val) {
        echo '<tr>
                  <td>1,001</td>
                  <td>'.$val.'</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>ver editar</td>
                </tr>'; 
        
        $i++; 
    }    
    ?>  
                  
               
                  
                <tr>
                  <td>1,015</td>
                  <td><a href="mi_evento.php">sodales</a></td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>

                        

                    </div>
                  
                    
                    
                    
                    
                    
                    
                    
                    
                    <h1><?php _t("Mis lugares"); ?></h1>                    
                    <div class="row">

                       
                        <?php 
                       // include "./eventos.php"; 
                        ?>



            
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  
                  <th>Lugar</th>
                  <th>Ciudad</th>
                  <th>Comentarios</th>
                  <th>accion</th>
                </tr>
              </thead>
              <tbody>

                  
                  
                  
                      <?php   
    $i=0; 
    $cat = array(
        "Fiesta del verano", 
        "Mama Llacta en Otavalo", 
        "Cancion para todos", 
        "almuerzo de solidaridd con castro", 
        "Cuenca y sus fiestas", 
        "Conocoto hace un pedido ", 
        "Duran sale a la luz con los testimonis");
    
    foreach($cat as $val) {
        echo '<tr>
                  <td>1,001</td>
                  <td>'.$val.'</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>ver editar</td>
                </tr>'; 
        
        $i++; 
    }    
    ?>  
                  
               
                  
                <tr>
                  <td>1,015</td>
                  <td><a href="mi_evento.php">sodales</a></td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>

                        

                    </div>
                  
                    
                    
                    
                    
                    
                    

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
