<?php

if  (

		( isset ( $_POST [ LL_INSERT ] ) ) &&

		( isset ( $_POST [ MM_INSERT ] ) ) &&

		( $_POST [ LL_INSERT ] == "FORM1" ) &&

		( $_POST [ MM_INSERT ] == "st_INSERT" ) 

	)

{

	$st_NOM = $_POST [ st_NOM ];

	$st_EM = $_POST [ st_EM ];

	$st_USERNAME = SHA1 ( $_POST [ st_USERNAME ] );

	$st_PASSWORD = SHA1 ( $_POST [ st_PASSWORD ] );


	//echo "-------$st_NOM---$st_EM--$st_USERNAME--$st_PASSWORD";



	include "Connections/conexion00.php";

	$call = "CALL st_INSERT ( '$st_NOM', '$st_EM', '$st_USERNAME', '$st_PASSWORD' ); ";

	$execute = mysql_query ( $call, $conexion00 );

	include "Connections/desconexion00.php";




    $mensaje = "

    <HTML>

    <HEAD>

      <TITLE>Alumno Itz</TITLE>

    </HEAD>

    <BODY>

    <P>$st_NOM</P>

    <P>$st_EM</P>


    <P>Estimado Alumno: </P>

    <P>Gracias por tomar clases en el I6BM.</P>

    <P>

<A HREF='HTTPS://RAMPTORS.NET/i6bm/'>Continuar</A>

    </P>

    </BODY>

    </HTML>";



    $headers[] = "MIME-Version: 1.0";

    $headers[] = "Content-type: text/html; charset=iso-8859-1";

    $headers[] = "From: Ramptors <ramptors@ramptors.net>";

    $headers[] = "To: $st_APP <'$st_EM'>";

    $headers[] = "Cc: lyt@mullerlewis.net";

    $headers[] = "Bcc: dr_codigo@ymail.com";



mail ( $st_EM, "Probando Correo", $mensaje, implode ( "\r\n", $headers ) );

header ( "Location: https://ramptors.net/i6bm/vazquezveronica/st_GRACIAS.php?st_EM=$st_EM" );

}

?>