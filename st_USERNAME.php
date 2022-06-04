<?php

$st_USERNAMEx = $_POST [ st_USERNAMEx ];

$st_USERNAMEsha1 = SHA1 ( $st_USERNAMEx );

include "Connections/conexionUP.php";

$queryS = "SELECT st_USERNAME 

			FROM student 

			WHERE st_USERNAME = '$st_USERNAMEsha1'; ";

$resultS = mysql_query ( $queryS, $conexionUP );

if ( $rowS = mysql_fetch_array ( $resultS ) )

	{

		echo "SI";

	}

else

	{

		echo "NO";

	}

include "Connections/desconexionUP.php";

?>