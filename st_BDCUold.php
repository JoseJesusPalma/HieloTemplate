<?php

include "Connections/conexion00.php";

$querySM = "SELECT * FROM student; ";

$resultSM = mysql_query ( $querySM, $conexion00 );

include "Connections/desconexion00.php";

while ( $rowSM = mysql_fetch_array ( $resultSM ) )

	{

		echo "$rowSM[st_ID] $rowSM[st_NOM] $rowSM[st_EM]";

		echo "<BR>";

	}

?>