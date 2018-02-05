
<h1><?php _t("Registro de un lugar"); ?></h1>


<form action="index.php" method="get">
    <input type="hidden" name="pag" value="registrar_lugar_confirmacion">

    <input type="hidden" name="lugares_pais" value="Ecuador">
    <input type="hidden" name="lugares_id_contacto" value="1">

    <div class="form-group">
        <label for="nombre"><?php _t("Nombre"); ?></label>
        <input type="text" class="form-control" id="nombre" NAME="lugares_nombre" placeholder="">
    </div>

    <div class="form-group">
        <label for="descripcion"><?php _t("Descripcion"); ?></label>
        <textarea NAME="lugares_descripcion" id="descripcion" class="form-control"></textarea>
    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="provincia"><?php _t("Provincia"); ?></label>
            <select id="inputState" class="form-control" NAME="lugares_provincia">
                <option selected>Choose...</option>
                
                
                <?php 
                $provincias = array(
                    "Pichincha",
                    "Guayas",
                    "Azuay",
                    "Cañar",
                    "Bolivar",
                    "Cotopaxi",
                    "Esmeraldas",
                    "Esmeraldas",
                    ); 
                
                for($i=0; $i< count($provincias); $i++){
                    echo '<option value="'.$pronvincias[$i].'">'.$provincias[$i].'</option>'; 
                }
                ?>
                
                
                
                
            </select>
        </div>
        
        <div class="form-group col-md-4">
            <label for="ciudad"><?php _t("Ciudad"); ?></label>
            <input type="text" class="form-control" id="ciudad" NAME="lugares_ciudad">
        </div>

        <div class="form-group col-md-4">
            <label for="sector"><?php _t("Sector o Barrio"); ?></label>
            <input type="text" class="form-control" id="sector" NAME="lugares_sector">
        </div>
    </div>




    <div class="form-row">      
        <div class="form-group col-md-4">
            <label for="direccion"><?php _t("Direccion"); ?></label>
            <input type="text" class="form-control" id="direccion" NAME="lugares_direccion" placeholder="<?php _t("Calle pincipal y numero"); ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="transversal"><?php _t("Transversal"); ?></label>
            <input type="text" class="form-control" id="transversal" NAME="lugares_transversal" placeholder="<?php _t("Calle aledaña"); ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="cpostal"><?php _t("Codigo postal"); ?></label>
            <input type="text" class="form-control" id="cpostal" NAME="lugares_cpostal" placeholder="">
        </div>
    </div>


    <div class="form-group">
        <label for="extra_direccion"><?php _t("extra_direccion"); ?></label>
        <textarea NAME="lugares_extra_direccion" id="extra_direccion" class="form-control" 
                  placeholder="<?php _t("Parada de bus, estacion de trolebus, otra referencia o indicacion para llegar"); ?>"></textarea>
    </div>








    <div class="form-group">
        <label for="tel"><?php _t("Telefono"); ?></label>
        <input type="text" class="form-control" id="inputAddress" NAME="lugares_tel" placeholder="<?php _t("02625985"); ?>">
    </div>




    <div class="form-group">
        <label for="email"><?php _t("Email"); ?></label>
        <input type="text" class="form-control" NAME="lugares_email" id="email" placeholder="<?php _t("cee@hotmail.com"); ?>">
    </div>




    <div class="form-group">
        <label for="sitio_web"><?php _t("Sitio web"); ?></label>
        <input type="text" class="form-control" id="sitio_web" NAME="lugares_sitio_web" placeholder="<?php _t("Sitio web oficial del lugar"); ?>" value="http://www.">
    </div>








    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                <a href="index.php" target="_top"><?php _t("Acepto las condiciones"); ?></a>
            </label>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Sign in</button>
</form>