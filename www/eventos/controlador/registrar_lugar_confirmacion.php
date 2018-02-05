<?php
//$lugares_id = mysql_real_escape_string($_GET['lugares_id']); 

$lugares_id_contacto    = (isset($_GET['lugares_id_contacto']))?mysql_real_escape_string($_GET['lugares_id_contacto']):1;
$lugares_nombre         = (isset($_GET['lugares_nombre']))?mysql_real_escape_string($_GET['lugares_nombre']):null;
$lugares_descripcion    = (isset($_GET['lugares_descripcion']))?mysql_real_escape_string($_GET['lugares_descripcion']):null;
$lugares_pais           = (isset($_GET['lugares_pais']))?mysql_real_escape_string($_GET['lugares_pais']):'Ecuador';
$lugares_provincia      = (isset($_GET['lugares_provincia']))?mysql_real_escape_string($_GET['lugares_provincia']):null;
$lugares_ciudad         = (isset($_GET['lugares_ciudad']))?mysql_real_escape_string($_GET['lugares_ciudad']):null;
$lugares_sector         = (isset($_GET['lugares_sector']))?mysql_real_escape_string($_GET['lugares_sector']):null;
$lugares_cpostal        = (isset($_GET['lugares_cpostal']))?mysql_real_escape_string($_GET['lugares_cpostal']):null;
$lugares_direccion      = (isset($_GET['lugares_direccion']))?mysql_real_escape_string($_GET['lugares_direccion']):null;
$lugares_transversal    = (isset($_GET['lugares_transversal']))?mysql_real_escape_string($_GET['lugares_transversal']):null;
$lugares_extra_direccion = (isset($_GET['lugares_extra_direccion']))?mysql_real_escape_string($_GET['lugares_extra_direccion']):null;
$lugares_tel            = (isset($_GET['lugares_tel']))?mysql_real_escape_string($_GET['lugares_tel']):null;
$lugares_email          = (isset($_GET['lugares_email']))?mysql_real_escape_string($_GET['lugares_email']):null;
$lugares_sitio_web      = (isset($_GET['lugares_sitio_web']))?mysql_real_escape_string($_GET['lugares_sitio_web']):null;
$lugares_estatus        = (isset($_GET['lugares_estatus']))?mysql_real_escape_string($_GET['lugares_estatus']):0;



include "./temas/pato/www/eventos/modelo/registrar_lugar_confirmacion.php";

include "./temas/pato/www/eventos/vista/registrar_lugar_confirmacion.php";
