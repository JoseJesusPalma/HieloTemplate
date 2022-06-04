<?php

$st_EM = $_GET [ st_EM ];


include "Connections/conexion00.php";

$queryS1 = "SELECT * FROM student WHERE st_EM = '$st_EM '; ";

$resultS1 = mysql_query ( $queryS1, $conexion00 );

$rowS1 = mysql_fetch_array ( $resultS1 );

include "Connections/desconexion00.php";


echo "$rowS1[st_ID] $rowS1[st_NOM] $rowS1[st_EM] GRACIAS!";



?>