<html Lang="es">
	<head>
		<title>Busqueda</title>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.css">

	</head>
	<body >
		<ul class="nav " role="tablist" style="background-color:green; height:50px">
			<li class="pull-left" style="color:white;"><h2>Re-reciclo</h2></li>
			<p class="pull-right">Bienvenido <a href="<?php echo base_url();?>" style="color:white;"><?php echo $user; ?></a></p>
		</ul>
		<br>
		<div class="container">
			<a href="<?php echo base_url();?>index.php/home?id=<?php echo $id;?>" ><button class="btn btn-info pull-right">Volver</button></a>
			<br>
		</div>
		<br>
		<div class="container-fluid">
			<div class="row">
				
			  <div class="col-xs-12">
			  	<div class="panel panel-info">
			  		<div class="panel-heading">Quiero reciclar</div>
  					<div class="panel-body">
    					<center>

    						<?php echo form_open('quieroreciclar/reciclar'.'?id='.$id); ?>
    					<table style="width:50%">
    						<tr>
    							<td style="width:50%"> ¿Qué reciclar? </td>
		    					<td style="width:50%"><select style="width:176px;" name="material">
		    					  <option value="op">Ingrese su opci&oacute;n</option>
								  <option value="1">Papel</option>
								  <option value="2">Cartón</option>
								  <option value="3">Botellas plásticas</option>
								  <option value="4">Vidrio</option>

								  <option value="otro">Otro</option>
								</select></td>
							</tr>
							<tr><td><br></td><td><br></td></tr>
							<tr>
								<td style="width:50%">¿Otro? </td>

								<td style="width:50%"><input type="text" name="otro" class="disabled" DISABLED > </td>
							</tr>
							<tr><td><br></td><td><br></td></tr>
							<tr> 
								<td style="width:50%">¿Cuánto?</td>
								<td style="width:50%"><input type="number" name="cuanto"></td>
							</tr>
							<tr><td><br></td><td><br></td></tr>
							<tr> 
								<td style="width:50%">¿Hasta cuando? </td>
								<td style="width:50%"><input type="date" name="fecha"></td>
							</tr>
							<tr><td><br></td><td><br></td></tr>
							
						</table>
						<table style="width:50%">
    						<tr style="width:100%">
    							<td ><textarea type="textarea" name="descripcion" style="width:100%; height:100px;"placeholder="Ingrese aquí una descripción de su producto"></textarea></td>
							</tr>
						</table>
						<br>
						<br>
						<br>
						<table style="width:50%">
							<tr>

								<?php 
								/*<?=form_open_multipart('quieroreciclar/do_upload'); ?>
								<td><input class="btn btn-default pull-left" type="submit" value="Subir foto"></td>
								</form>*/
								?>

								<td><button class="btn btn-success pull-right">¡A reciclar!</button></td>
						</table>
						<?php echo form_close();?>
    					</center>
 					</div>
 					<div>
			<?php

				if(isset($mensajehtml))
				{
					echo $mensajehtml;
				}
				

			?>
		</div>
			  	</div>
			  </div>
			  
			  
			</div>
		</div>
		
		<footer>
			<canvas></canvas>
		</footer>
	</body>
</html>