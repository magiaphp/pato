<?php

$b    = (isset($_GET['b']))     ? mysql_real_escape_string($_GET['b']) : "";

include "./temas/pato/www/eventos/modelo/index.php";
include "./temas/pato/www/eventos/vista/index.php";