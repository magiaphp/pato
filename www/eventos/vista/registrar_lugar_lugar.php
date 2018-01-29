
<h1><?php _t("Registro de un lugar"); ?></h1>


<form action="index.php" method="get">


    <div class="form-group">
        <label for="nombre"><?php _t("Nombre"); ?></label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
    </div>

    <div class="form-group">
        <label for="descripcion"><?php _t("Descripcion"); ?></label>
        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="provincia"><?php _t("Provincia"); ?></label>
            <select id="inputState" class="form-control" name="provincia">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        
        <div class="form-group col-md-4">
            <label for="inputCity"><?php _t("Ciudad"); ?></label>
            <input type="text" class="form-control" id="inputCity">
        </div>

        <div class="form-group col-md-4">
            <label for="inputZip"><?php _t("Barrio"); ?></label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>




    <div class="form-row">      
        <div class="form-group col-md-6">
            <label for="inputEmail4"><?php _t("Direccion"); ?></label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="<?php _t("Calle pincipal y numero"); ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4"><?php _t("Transversal"); ?></label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="<?php _t("Calle aledaña"); ?>">
        </div>
    </div>


    <div class="form-group">
        <label for="descripcion"><?php _t("extra_direccion"); ?></label>
        <textarea name="descripcion" id="descripcion" class="form-control" 
                  placeholder="<?php _t("Parada de bus, estacion de trolebus, otra referencia o indicacion para llegar"); ?>"></textarea>
    </div>








    <div class="form-group">
        <label for="inputAddress"><?php _t("Telefono"); ?></label>
        <input type="text" class="form-control" id="inputAddress" placeholder="<?php _t("02625985"); ?>">
    </div>




    <div class="form-group">
        <label for="inputAddress"><?php _t("Email"); ?></label>
        <input type="text" class="form-control" id="inputAddress" placeholder="<?php _t("cee@hotmail.com"); ?>">
    </div>




    <div class="form-group">
        <label for="inputAddress"><?php _t("Sitio web"); ?></label>
        <input type="text" class="form-control" id="inputAddress" placeholder="<?php _t("Sitio web oficial del lugar"); ?>" value="http://www.">
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