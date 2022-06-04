<?php

$st_EMx = $_POST [ st_EMx ];

include "Connections/conexion00.php";

$queryS = "SELECT st_EM

			FROM student 

			WHERE st_EM = '$st_EMx'; ";

$resultS = mysql_query ( $queryS, $conexion00 );

if ( $rowS = mysql_fetch_array ( $resultS ) )

	{

		echo "SI";

	}

else

	{

		echo "NO";

	}

include "Connections/desconexion00.php";

?>