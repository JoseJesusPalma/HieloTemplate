<?php

include "11.php";

?>





<header class="align-center">

	<p>MANTENIMIENTO DEL CATALOGO</p>

	<h2>Estudiante</h2>

</header>









<?php

include "Connections/conexion00.php";

$queryVIEW = "SELECT * FROM st_SELECT; ";

$resultVIEW = mysql_query ( $queryVIEW, $conexion00 );

include "Connections/desconexion00.php";

?>

<h3>Table</h3>

<h4>Default</h4>

	<div class="table-wrapper">

		<table>

			<thead>

				<tr>

					<th>Nombre</th>

					<th>Correo Electr&oacute;nico</th>

					<th></th>

					<th></th>

				</tr>

			</thead>

		<tbody>

<?php

while ( $rowVIEW = mysql_fetch_array ( $resultVIEW ) )

	{

?>

	<TR>

		<TD>

			<?php echo htmlentities ( $rowVIEW[NOMBRE], ENT_COMPAT, 'UTF-8' ); ?>

		</TD>

		<TD>

			<?php echo htmlentities ( $rowVIEW[CORREO], ENT_COMPAT, 'UTF-8' ); ?>
		</TD>

		<TD>

			<A HREF=st_CAMBIOS.php?ID=<?php echo $rowVIEW[ID]; ?>>MODIFICAR</A>	

		</TD>

		<TD>

			<A HREF=st_BAJAS.php?ID=<?php echo $rowVIEW[ID]; ?>>ELIMINAR</A>	

		</TD>

	</TR>






		


<?php

	}

?>
	
		</tbody>

		<tfoot>

			<tr>

				<td></td>

				<td></td>

				<td></td>

				<td></td>

			</tr>

		</tfoot>

		</table>
	
	</div>






<?php

include "99.php";

?>
