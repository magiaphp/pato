<?php

$b    = (isset($_GET['b']))     ? mysql_real_escape_string($_GET['b']) : false;
$sologratis    = (isset($_GET['sologratis']))     ? mysql_real_escape_string($_GET['sologratis']) : false;

// aca poner el control de lo que busco 

include "./temas/pato/www/eventos/modelo/buscar.php";

include "./temas/pato/www/eventos/vista/index.php";