<p></p>
<form class="form-signin" action="buscar.php">
            
    <h1 class="h3 mb-3 font-weight-normal">Buscar</h1>
    
    <label for="inputEmail" class="sr-only">Que buscas?</label>
    <input type="texto" id="inputEmail" class="form-control" placeholder="Actividad" required autofocus>
    
    <label for="inputPassword" class="sr-only">Donde?</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Donde" required>        
    
    <label for="inputPassword" class="sr-only">Fecha?</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Fecha" required>
    
    
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Solo gratis
        </label>
    </div>
    
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">Buscar</button>
    
</form>

<h1 class="my-4">Shop Name</h1>
<div class="list-group">
    
    <?php   
    $cat = array("Cine", "Teatro", "Conciertos", "Salones", "Exposiciones", "Ferias");
    
    foreach($cat as $val) {
        echo '<a href="buscar.php?categoria='.$val.'" class="list-group-item">'.$val.'</a>'; 
    }    
    ?>    
</div>


<h1 class="my-4">Ciudades</h1>
<div class="list-group">
    
    <?php   
    $cat = array("Quito", "Guayaquil", "Ambato", "Cuenca", "Conocoto", "Duran");
    
    foreach($cat as $val) {
        echo '<a href="buscar.php?categoria='.$val.'" class="list-group-item">'.$val.'</a>'; 
    }    
    ?>    
</div>

<h1 class="my-4">Lugares</h1>
<div class="list-group">
    
    <?php   
    $cat = array("CCE", "Sala", "Sala max", "Cuenca", "Conocoto", "Duran");
    
    foreach($cat as $val) {
        echo '<a href="lugares.php?lugar='.$val.'" class="list-group-item">'.$val.'</a>'; 
    }    
    ?>    
</div>





<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
