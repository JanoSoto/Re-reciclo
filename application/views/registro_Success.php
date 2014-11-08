<html Lang="es">
	<head>
		<title>Busqueda</title>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.css">
		<script>
		function validarPass()
		{
			var contrasena1;
			var contrasena2;
		}
		</script>

	</head>
	<body>
		
		<div class="col-lg-12 well">
			<span>Registro de usuario<span>
			<a href="../"><button class="btn btn-primary pull-right">Volver</button></a>	
		</div>

		<div>
			<center>
			<?php echo form_open('registro/registroUsuario');?>
			<table style="width:50%">
				<tr>
					<td style="width:50%">Nombre Persona/Institución</td>
					<td><input type="text" name="nombre"  required="" autofocus=""></td>
				</tr>
				<tr><td></br></td></tr>
				<tr>
					<td style="width:50%">Apellidos</td>
					<td><input type="text" name="ap"></td>
				</tr>
				</table>
				
				</br>
				<legend>Datos de ubicación</legend>
				</br>
				<table style="width:50%;">
					<tr>
						<td style="width:50%">Ciudad</td>
						<td><input type="text" name="ciudad" required=""></td>
					</tr>
					<tr><td></br></td></tr>
					<tr>
						<td style="width:50%">Comuna</td>
						<td><input type="text" name="comuna" required=""></td>
					</tr>
					<tr><td></br></td></tr>
					<tr>
						<td style="width:50%">Dirección</td>
						<td><input type="text" name="dir" ></td>
					</tr>
				</table>
				</br>
				<legend>Datos de contacto</legend>
				<table style="width:50%">

				<tr>
					<td style="width:50%">correo</td>
					<td><input type="email" name="correo" placeholder="ejemplo@tucorreo.cl" required=""></td>
				</tr>
				<tr><td></br></td></tr>
				<tr>
					<td style="width:50%">Teléfono</td>
					<td><input type="text" name="tel"></td>
				</tr>
			</table>
			</br>	

			<legend>Datos de usuario</legend>
			</br>

			<table style="width:50%">
				<tr>
					<td style="width:50%">Nombre de usuario</td>
					<td><input type="text" name="user" required=""></td>
				</tr>
				<tr><td></br></td></tr>
				<tr>
					<td style="width:50%">Ingrese contraseña</td>
					<td><input type="password"  name="pass1" required=""></td>
				</tr>
				<tr><td></br></td></tr>
				<tr>
					<td style="width:50%">Repita su contraseña</td>
					<td><input type="password" name="pass" onChange='validarPass();'></td>
				</tr>

			</table>

		</br>
	</br>
			<input type="submit" class="btn btn-primary" value="Registrar">
			<?php echo form_close();?>
		<div>
			<?php

				if(isset($mensajehtml))
				{
					echo $mensajehtml;
				}
			?>
		</div>
		</center>

		</div>
		<footer>
			<canvas></canvas>
		</footer>
	</body>
</html>