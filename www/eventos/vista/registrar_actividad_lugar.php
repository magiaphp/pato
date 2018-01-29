
<h1><?php _t("Registro de una actividad"); ?></h1>


<form>

    <div class="form-group">
        <label for="id_lugar"><?php _t("Lugar"); ?> - <a href="index.php?pag=registrar_lugar">Registrar un lugar</a></label>
        <select class="form-control" name="id_lugar">
            <option>Lugar</option>
            <?php 
            lugares_add(); 
            ?>            
        </select>
    </div>


    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fecha_inicio"><?php _t("Fecha de inicio"); ?></label>
            <input type="date" class="form-control" id="fecha_inicio">
        </div>
        <div class="form-group col-md-4">
            <label for="hora_inicio"><?php _t("Hora"); ?></label>
            <select id="hora_inicio" name="hora_inicio" class="form-control">
                <?php horas_add($h); ?>              
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="min_inicio"><?php _t("Min."); ?></label>
            <select id="min_inicio" name="min_inicio" class="form-control">
                <?php min_add($m)?>              
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fecha_fin"><?php _t("Fecha de fin"); ?></label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin">
        </div>
        <div class="form-group col-md-4">
            <label for="hora_fin"><?php _t("Hora"); ?></label>
            <select id="hora_fin" class="form-control" name="hora_fin">
               <?php horas_add($h); ?>               
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="min_fin"><?php _t("Min."); ?></label>
            <select id="min_fin" class="form-control" name="min_fin">
              <?php min_add($m)?>                   
            </select>
        </div>
    </div>



    <div class="form-group">
        <label for="descripcion"><?php _t("Descripcion"); ?></label>
        <textarea class="form-control" rows="10" name="descripcion"></textarea>
    </div>


    <div class="form-group">
        <label for="precio"><?php _t("Precio"); ?></label>
        <input type="text" name="precio"  class="form-control" id="precio" placeholder="<?php _t("Pon 0 si es gratis"); ?>">
    </div>










    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>


    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>