<?php

if  (

		( isset ( $_POST [ LL_DELETE ] ) ) &&

		( isset ( $_POST [ MM_DELETE ] ) ) &&

		( $_POST [ LL_DELETE ] == "FORM1" ) &&

		( $_POST [ MM_DELETE ] == "st_DELETE" ) 

	)

{

    $st_ID = $_POST [ st_ID ];




	include "Connections/conexion00.php";

	$call = "CALL st_DELETE ( '$st_ID' ); ";

	$execute = mysql_query ( $call, $conexion00 );

	include "Connections/desconexion00.php";




    header ( "Location: https://ramptors.net/i6bm/vazquezveronica/st_BDCU.php" );

}

?>