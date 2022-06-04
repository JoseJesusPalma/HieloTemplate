<?php

$st_NOM = $_POST [ st_NOM ];

$st_EM = $_POST [ st_EM ];

$st_USERNAME = $_POST [ st_USERNAME ];

$st_PASSWORD = $_POST [ st_PASSWORD ];


//echo "-------$st_NOM---$st_EM--$st_USERNAME--$st_PASSWORD";



include "Connections/conexion00.php";

$query = "INSERT INTO student

			SET st_NOM = '$st_NOM',

			st_EM = '$st_EM',

			st_USERNAME = '$st_USERNAME',

			st_PASSWORD = '$st_PASSWORD'; ";

$play = mysql_query ( $query, $conexion00 );

include "Connections/desconexion00.php";

?>