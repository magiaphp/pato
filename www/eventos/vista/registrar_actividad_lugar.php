




<form method="get" action="index.php" id="">
    
    <input type="hidden" name="pag" value="registrar_actividad_confirmacion">
    
    
    
    <div class="form-group">
        <label for="id_contacto"><?php _t("Registrado por"); ?></label>
        <input type="text" name="id_contacto"  class="form-control" id="id_contacto" placeholder="" value="1" readonly="">
    </div>
    

    <div class="form-group">
        <label for="id_lugar"><?php _t("Lugar"); ?> - <a href="index.php?pag=registrar_lugar">Registrar un lugar</a></label>
        <select class="form-control" NAME="eventos_id_lugar">
            <option value="1">Lugar</option>
            <?php 
            lugares_add(); 
            ?>            
        </select>
    </div>


    <div class="form-group">
        <label for="id_categoria"><?php _t("Categoria"); ?> </label>
        <select class="form-control" NAME="eventos_id_categoria">
            <option value="1"><?php _t("Escoja una"); ?></option>
            <?php 
                        categorias_add(); 
            ?>            
        </select>
    </div>

    <div class="form-group">
        <label for="id_publico"><?php _t("Tipo de publico"); ?> </label>
        <select class="form-control" NAME="eventos_id_publico">
            <option value="1">all</option>
            <?php 
                     publico_add(); 
            ?>            
        </select>
    </div>




    <div class="form-group">
        <label for="titulo"><?php _t("Titulo"); ?></label>
        <input type="text" NAME="eventos_titulo"  class="form-control" id="titulo" placeholder="Titulo de evento" value="" >
    </div>

    <div class="form-group">
        <label for="descripcion"><?php _t("Descripcion"); ?></label>
        <textarea class="form-control" rows="10" NAME="eventos_descripcion" id="name"></textarea>
    </div>


    <div class="form-group">
        <label for="precio"><?php _t("Precio"); ?></label>
        <input type="text" NAME="eventos_precio"  class="form-control" id="precio" placeholder="<?php _t("Pon 0 si es gratis"); ?>">
    </div>



    
    

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fecha_inicio"><?php _t("Fecha de inicio"); ?></label>
            <input type="date" class="form-control" id="fecha_inicio" NAME="eventos_fecha_inicio" >
        </div>
        <div class="form-group col-md-4">
            <label for="hora_inicio"><?php _t("Hora"); ?></label>
            <select id="hora_inicio" NAME="eventos_hora_inicio" class="form-control">
                <?php horas_add(date("G")*3600); ?>              
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="min_inicio"><?php _t("Min."); ?></label>
            <select id="min_inicio" NAME="eventos_min_inicio" class="form-control">
                <?php min_add()?>              
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fecha_fin"><?php _t("Fecha de fin"); ?></label>
            <input type="date" class="form-control" id="fecha_fin" NAME="eventos_fecha_fin">
        </div>
        <div class="form-group col-md-4">
            <label for="hora_fin"><?php _t("Hora"); ?></label>
            <select id="hora_fin" class="form-control" NAME="eventos_hora_fin">
               <?php horas_add($h); ?>               
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="min_fin"><?php _t("Min."); ?></label>
            <select id="min_fin" class="form-control" NAME="eventos_min_fin">
              <?php min_add($m)?>                   
            </select>
        </div>
    </div>






    
    
    
    <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button>
</form>