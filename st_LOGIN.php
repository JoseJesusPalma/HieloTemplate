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














function valida_USERNAMEdos ( )

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






if ( document.FORM1.st_USERNAME.value.length == 0 )

	{

		// NADA

		return ( false );

	}

else

	{


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


						if ( rebanada == "NO" )

							{

								alert ( "Usuario '" + st_USERNAMEx + "'NO Existe!" );

								document.FORM1.st_USERNAME.value = "";

								document.FORM1.st_USERNAME.focus();

								return ( false );

							}

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






// VALIDACIÓN DE st_USERNAME

if ( document.FORM1.st_USERNAME.value.length == 0 )

	{

		alert ( "USUARIO NO Debe Estar Vacio!" );

		document.FORM1.st_USERNAME.focus();
		
		return ( false );	

	}









// VALIDACIÓN DE st_PASSWORD

if ( document.FORM1.st_PASSWORD.value.length == 0 )

	{

		alert ( "CONTRASEÑA NO Debe Estar Vacio!" );

		document.FORM1.st_PASSWORD.focus();
		
		return ( false );	

	}









document.FORM1.submit();

}









</SCRIPT>





<header class="align-center">

	<p>INICIO DE SESI&Oacute;N</p>

	<h2>Estudiante</h2>

</header>



<!-- Form -->

<h3>Introduzca sus Datos</h3>


<FORM METHOD = "POST";

		ACTION = "st_VALIDATE.php";

		NAME = "FORM1";

		ID = "FORM1";

		>



<div class="row uniform">
										

	<div class="12u$">

		<LABEL FOR = "st_NOM";>Usuario</LABEL>

		<input TYPE = "text";

				NAME = "st_USERNAME";

				ID = "st_USERNAME";

				VALUE = "";

				PLACEHOLDER = "Usuario";

				ONBLUR = "valida_USERNAMEdos(); ";

		/>

	</div>






	<div class="12u$">

		<LABEL FOR = "st_PASSWORD";>Contrase&ntilde;a</LABEL>

		<input TYPE = "PASSWORD";

				NAME = "st_PASSWORD";

				ID = "st_PASSWORD";

				value="";

				PLACEHOLDER = "Contrase&ntilde;a" />


	</div>




















	


		<input TYPE = "HIDDEN";

				NAME = "LL_LOGIN";

				ID = "LL_LOGIN";

				value="FORM1"; />


	
		<input TYPE = "HIDDEN";

				NAME = "MM_LOGIN";

				ID = "MM_LOGIN";

				value="st_LOGIN"; />

















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