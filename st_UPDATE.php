<?php

if  (

		( isset ( $_POST [ LL_UPDATE ] ) ) &&

		( isset ( $_POST [ MM_UPDATE ] ) ) &&

		( $_POST [ LL_UPDATE ] == "FORM1" ) &&

		( $_POST [ MM_UPDATE ] == "st_UPDATE" ) 

	)

{

	$st_NOM = $_POST [ st_NOM ];

	$st_EM = $_POST [ st_EM ];

    $st_ID = $_POST [ st_ID ];




	include "Connections/conexion00.php";

	$call = "CALL st_UPDATE ( '$st_ID', '$st_NOM', '$st_EM' ); ";

	$execute = mysql_query ( $call, $conexion00 );

	include "Connections/desconexion00.php";




    header ( "Location: https://ramptors.net/i6bm/vazquezveronica/st_BDCU.php" );

}

?>