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












// VALIDACIÓN DE st_USERNAME

if ( document.FORM1.st_USERNAME.value.length == 0 )

	{

		alert ( "El Campo USUARIO NO Debe Estar Vacio!" );

		document.FORM1.st_USERNAME.focus();
		
		return ( false );	

	}













// VALIDACIÓN DE st_PASSWORD

if ( document.FORM1.st_PASSWORD.value.length == 0 )

	{

		alert ( "El Campo CONTRASENA NO Debe Estar Vacio!" );

		document.FORM1.st_PASSWORD.focus();
		
		return ( false );	

	}











// VALIDACIÓN DE st_PASSWORD

if ( document.FORM1.st_PASSWORDyy.value.length == 0 )

	{

		alert ( "El Campo REPETIR CONTRASENA NO Debe Estar Vacio!" );

		document.FORM1.st_PASSWORDyy.focus();
		
		return ( false );	

	}











// VALIDACIÓN DE st_PASSWORD == PASSWORDyy

if ( 

		document.FORM1.st_PASSWORDyy.value == 

		document.FORM1.st_PASSWORD.value

	)

	{

		// NO HAGAS NADA!

	}

else

	{

		alert ( "Las CONTRASENAS NO Son Iguales!" );

		document.FORM1.st_PASSWORD.focus();
		
		document.FORM1.st_PASSWORDyy.focus();
		
		return ( false );	

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

<h3>Introduzca sus Datos</h3>


<FORM METHOD = "POST";

		ACTION = "st_INSERT.php"; 

		NAME = "FORM1";

		ID = "FORM1";

		>



<div class="row uniform">
										

	<div class="12u$">


		<input TYPE = "text";

				NAME = "st_NOM";

				ID = "st_NOM";

				value="";

				PLACEHOLDER = "Nombre";

				ONBLUR = "st_NOMmayusc(); ";

				 />


	</div>






	<div class="12u$">


		<input TYPE = "text";

				NAME = "st_EM";

				ID = "st_EM";

				value="";

				PLACEHOLDER = "Correo Electr&oacute;nico";

				ONBLUR = 	"	

								st_EMminusc ( ); 

								valida_EM ( );

							";

			 />


	</div>






	<div class="12u$">


		<input TYPE = "text";

				NAME = "st_USERNAME";

				ID = "st_USERNAME";

				VALUE = "";

				PLACEHOLDER = "Usuario";

				ONBLUR = "valida_USERNAME(); ";

		/>

	</div>






	<div class="12u$">


		<input TYPE = "PASSWORD";

				NAME = "st_PASSWORD";

				ID = "st_PASSWORD";

				value="";

				PLACEHOLDER = "Contrase&ntilde;a" />


	</div>






	<div class="12u$">


		<input TYPE = "PASSWORD";

				NAME = "st_PASSWORDyy";

				ID = "st_PASSWORDyy";

				value="";

				PLACEHOLDER = "Repetir Contrase&ntilde;a" />


	</div>















	


		<input TYPE = "HIDDEN";

				NAME = "LL_INSERT";

				ID = "LL_INSERT";

				value="FORM1"; />


	
		<input TYPE = "HIDDEN";

				NAME = "MM_INSERT";

				ID = "MM_INSERT";

				value="st_INSERT"; />

















<!-- Break -->

	<div class="12u$">


		<ul class="actions">

			<li>

				<INPUT TYPE = "BUTTON";

						VALUE = "Inscribirse";

						CLASS = "button special"; 

						ONCLICK = "valida_FORM1 ( ); ";

				/>

			</li>
			
			<li>

				<input type="reset" value="Limpiar" class="button alt" />

			</li>

		</ul>

	</div>
							


</div><!-- class="row uniform" -->


</form>

							


											
<hr /><!-- Rayita -->

		


					
						



<?php

include "99.php";

?>