 <?php 
$sql=mysql_query("SELECT * FROM eventos WHERE id = '$_contenido_id'  ",$conexion)or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $eventos = mysql_fetch_array($sql);	 


 include "./gestion/eventos/reg/reg.php"; 
 
 
 
 
