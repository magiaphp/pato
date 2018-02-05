<?php



$eventos_id_contacto    = (isset($_GET['eventos_id_contacto']))     ? mysql_real_escape_string($_GET['eventos_id_contacto']) : 1;
$eventos_id_categoria   = (isset($_GET['eventos_id_categoria']))    ? mysql_real_escape_string($_GET['eventos_id_categoria']) : null;
$eventos_id_lugar       = (isset($_GET['eventos_id_lugar']))        ? mysql_real_escape_string($_GET['eventos_id_lugar']) : null;
$eventos_id_publico     = (isset($_GET['eventos_id_publico']))      ? mysql_real_escape_string($_GET['eventos_id_publico']) : null;
$eventos_titulo         = (isset($_GET['eventos_titulo']))          ? mysql_real_escape_string($_GET['eventos_titulo']) : 'Titulo por defecto';
$eventos_descripcion    = (isset($_GET['eventos_descripcion']))     ? mysql_real_escape_string($_GET['eventos_descripcion']) : "Descripcion por defecto ";
$eventos_fecha_inicio   = (isset($_GET['eventos_fecha_inicio']))    ? mysql_real_escape_string($_GET['eventos_fecha_inicio']) : 1973-01-01;
$eventos_hora_inicio    = (isset($_GET['eventos_hora_inicio']))     ? mysql_real_escape_string($_GET['eventos_hora_inicio']) : 0;
$eventos_fecha_fin      = (isset($_GET['eventos_fecha_fin']))       ? mysql_real_escape_string($_GET['eventos_fecha_fin']) : 1973-01-01;
$eventos_hora_fin       = (isset($_GET['eventos_hora_fin']))        ? mysql_real_escape_string($_GET['eventos_hora_fin']) : 0;
$eventos_precio         = (isset($_GET['eventos_precio']))          ? mysql_real_escape_string($_GET['eventos_precio']) : null;
$eventos_youtube        = (isset($_GET['eventos_youtube']))         ? mysql_real_escape_string($_GET['eventos_youtube']) : null;
$eventos_visitas        = (isset($_GET['eventos_visitas']))         ? mysql_real_escape_string($_GET['eventos_visitas']) : 0;
$eventos_orden          = (isset($_GET['eventos_orden']))           ? mysql_real_escape_string($_GET['eventos_orden']) : 0;
$eventos_estatus        = (isset($_GET['eventos_estatus']))         ? mysql_real_escape_string($_GET['eventos_estatus']) : 0;

include "./temas/pato/www/eventos/modelo/registrar_actividad_confirmacion.php";

include "./temas/pato/www/eventos/vista/registrar_actividad_confirmacion.php";