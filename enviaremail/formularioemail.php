<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Esta es la meta descripción de la página">
	<title>Enviar por correo electronico</title>
</head>
<body>
<form name="frmContacto" method="post" action="enviaremail.php">
<table width="500px">
	<tr>
		<td>
		<label >Nombre: *</label>
		</td>
		<td>
		<input type="text" name="nombre" maxlength="50" size="25">
		</td>
	</tr>
	<tr>
		<td valign="top">
		<label >Apellido: *</label>
		</td>
		<td>
		<input type="text" name="apellido" maxlength="50" size="25">
		</td>
	</tr>

	<tr>
		<td>
		<label>Dirección de E-mail: *</label>
		</td>
		<td>
		<input type="text" name="email" maxlength="80" size="35">
		</td>
	</tr>
	
	<tr>
		<td>
		<label>Número de teléfono:</label>
		</td>
		<td>
		<input type="text" name="telefono" maxlength="25" size="15">
		</td>
	</tr>
	
	<tr>
		<td>
		<label>Comentarios: *</label>
		</td>
		<td>
		<textarea name="comentarios" maxlength="500" cols="30" rows="5"></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" style="text-align:right">
		<input type="submit" value="Enviar">
		</td>
	</tr>

</table>
</form>
</body>
</html>