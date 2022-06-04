<?php

$ID = $_GET [ ID ];

//echo $ID;

include "Connections/conexion00.php";

$queryVIEW = "SELECT * FROM st_SELECT WHERE ID = '$ID'; ";

$resultVIEW = mysql_query ( $queryVIEW, $conexion00 );

$rowVIEW = mysql_fetch_array ( $resultVIEW );

include "Connections/desconexion00.php";

?>
<?php

include "11.php";

?>




<SCRIPT LANGUAGE = JavaScript >






function nuevoAjax ( )

    {

	    var xmlhttp = false;

	    try

	    {

	    	// Internet Explorer

		    xmlhttp = new ActiveXObject ( "Msxml2.XMLHTTP" );

		}

      	catch ( e )

		{

			try

			{

                // Creacion del objet AJAX para Edge

                xmlhttp = new ActiveXObject ( "Microsoft.XMLHTTP" );

            }

            catch ( E )

            {

            	xmlhttp = false;

            }

	    }


	// Opera - Mozilla FireFox - Safari - Chrome

	if ( !xmlhttp && typeof XMLHttpRequest != "undefined" )

        {

        	// OPERA - CHROME - MOZILLA FIREFOX - SAFARI

        	xmlhttp = new XMLHttpRequest();

        }



    return xmlhttp;

    }














function valida_USERNAME ( )

{

	// ATRAPAMOS EL AJAX SEGUN EL BROWSER

	ajax = nuevoAjax ( );

	// TRAEMOS LA CAJA DEL st_USERNAME

	st_USERNAMEcaja = document.FORM1.st_USERNAME;

	// AQUI ESTÁ LO QUE ESCRIBIMOS DENTRO DE LA CAJA

	st_USERNAMEx = st_USERNAMEcaja.value;




	// DECLARAMOS

	var METHODx = "POST";

var URLx = "https://ramptors.net/i6bm/vazquezveronica/st_USERNAME.php";


	
	// EJECUTAMOS EL AJAX

	ajax.open ( METHODx, URLx, true );

	ajax.setRequestHeader ( "Content-type", "application/x-www-form-urlencoded" );

	ajax.send ( "st_USERNAMEx=" + st_USERNAMEx ); 



	// TRAEMOS LA RESPUESTA

    ajax.onreadystatechange = function ( )

			{   

				// 4: request finished and response is ready 

				// 200: OK

				// alert ( "readyState = " + ajax.readyState );

				if ( ajax.readyState == 4 && ajax.status == 200 )

					{


						// alert ( "ya funciona el AJAX" );

						// alert ( "resultado: " + ajax.responseText );


						var respuesta = ajax.responseText;

						var rebanada = respuesta.substring ( 0, 2 );


						// alert ( ajax.responseText );


						if ( rebanada == "SI" )

							{

								alert ( "Usuario YA Existe!" );

								document.FORM1.st_USERNAME.focus();

								return ( false );

							}

					}

			}
	
}

















function valida_EM ( )

{

	// ATRAPAMOS EL AJAX SEGUN EL BROWSER

	ajax = nuevoAjax ( );

	// TRAEMOS LA CAJA DEL st_USERNAME

	st_EMcaja = document.FORM1.st_EM;

	// AQUI ESTÁ LO QUE ESCRIBIMOS DENTRO DE LA CAJA

	st_EMx = st_EMcaja.value;




	// DECLARAMOS

	var METHODx = "POST";

var URLx = "https://ramptors.net/i6bm/vazquezveronica/st_EM.php";


	
	// EJECUTAMOS EL AJAX

	ajax.open ( METHODx, URLx, true );

	ajax.setRequestHeader ( "Content-type", "application/x-www-form-urlencoded" );

	ajax.send ( "st_EMx=" + st_EMx ); 



	// TRAEMOS LA RESPUESTA

    ajax.onreadystatechange = function ( )

			{   

				// 4: request finished and response is ready 

				// 200: OK

				// alert ( "readyState = " + ajax.readyState );

				if ( ajax.readyState == 4 && ajax.status == 200 )

					{


						// alert ( "ya funciona el AJAX" );

						// alert ( "resultado: " + ajax.responseText );


						var respuesta = ajax.responseText;

						var rebanada = respuesta.substring ( 0, 2 );


						// alert ( ajax.responseText );


						if ( rebanada == "SI" )

							{

							alert ( "Correo Electrónico YA Existe!" );

							document.FORM1.st_EM.focus();

							return ( false );

							}

					}

			}
	
}
























function st_NOMmayusc ( )

{

	var x = document.FORM1.st_NOM.value;

	document.FORM1.st_NOM.value = x.toUpperCase ( );

}








function st_EMminusc ( )

{

	var x = document.FORM1.st_EM.value;

	document.FORM1.st_EM.value = x.toLowerCase ( );

}








function valida_FORM1 ( )

{




// VALIDACIÓN DE st_NOM

if ( document.FORM1.st_NOM.value.length == 0 )

	{

		alert ( "El Campo NOMBRE NO Debe Estar Vacio!" );

		document.FORM1.st_NOM.focus();
		
		return ( false );	

	}

else

	{

		st_NOMedv = /^([a-zA-ZÑñÜüÁáÉéÍíÓóÚú/ /./-])+$/;

		if ( st_NOMedv.test ( document.FORM1.st_NOM.value ) )

			{

				// NO HAGAS NADA!

			}

		else

			{

				alert ( "El Campo NOMBRE NO Esta Bien Escrito!" );

				document.FORM1.st_NOM.focus();
		
				return ( false );	

			}

	}












// VALIDACIÓN DE st_EM

if ( document.FORM1.st_EM.value.length == 0 )

	{

		alert ( "El Campo CORREO ELECTRONICO NO Debe Estar Vacio!" );

		document.FORM1.st_EM.focus();
		
		return ( false );	

	}

else

	{

		st_EMedv = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+([a-zA-Z0-9\.]{0,2})+$/;

		if ( st_EMedv.test ( document.FORM1.st_EM.value ) )

			{

				// NO HAGAS NADA!

			}

		else

			{

				alert ( "El Campo CORREO ELECTRONICO NO Esta Bien Escrito!" );

				document.FORM1.st_EM.focus();
		
				return ( false );	

			}

	}



















































alert ( "GRACIAS POR LLENAR EL PRESENTE FORMULARIO!" );

document.FORM1.submit();

}









</SCRIPT>





<header class="align-center">

	<p>MANTENIMIENTO DEL CATALOGO</p>

	<h2>Estudiante</h2>

</header>



<!-- Form -->

<h3>Elimine sus Datos</h3>

<FORM METHOD = "POST";

		ACTION = "st_DELETE.php"; 

		NAME = "FORM1";

		ID = "FORM1";

		>



<div class="row uniform">
										

	<div class="12u$">

	<dl>

		<dt>Nombre</dt>

			<dd>
				
				<?php echo $rowVIEW[NOMBRE]; ?>

			</dd>
								
	</dl>

	</div>

	<div class="12u$">

	<dl>

		<dt>Correo Electr&oacute;nico</dt>

			<dd>
				
				<?php echo $rowVIEW[CORREO]; ?>

			</dd>
								
	</dl>

	</div>






	


		<input TYPE = "HIDDEN";

				NAME = "LL_DELETE";

				ID = "LL_DELETE";

				value="FORM1"; />


	
		<input TYPE = "HIDDEN";

				NAME = "MM_DELETE";

				ID = "MM_DELETE";

				value="st_DELETE"; />




		<input TYPE = "HIDDEN";

				NAME = "st_ID";

				ID = "st_ID";

				value="<?php echo $rowVIEW[ID]; ?>"; />















<!-- Break -->

	<div class="12u$">


		<ul class="actions">

			<li>

				<INPUT TYPE = "SUBMIT";

						VALUE = "Eliminar";

						CLASS = "button alt"; 

				/>

			</li>
			
			<li>

				<A HREF = "st_BDCU.php" class="button special">IGNORAR</A>

			</li>

		</ul>

	</div>
							


</div><!-- class="row uniform" -->

</form>







<hr /><!-- Rayita -->






<?php

include "99.php";

?>