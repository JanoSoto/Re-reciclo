<!DOCTYPE html>
<html>
<head>
	<title>Lista Disponibles</title>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.css">
</head>
<body>
	<ul class="nav " role="tablist" style="background-color:green; height:50px">
		<li class="pull-left" style="color:white;"><h2>Re-reciclo</h2></li>
		<li class="pull-right"><a href="<?php echo base_url();?>">Bienvenido <?php echo $user; ?></a></li>
	</ul>
	<br>
	<div class="container">
			<a href="<?php echo base_url();?>index.php/home?id=<?php echo $id;?>" ><button class="btn btn-info pull-right">Volver</button></a>
			<br>
		</div>
		<br>
	<?= form_open('listaDisponibles/mostrar_disponibles' .'?id='.$id); ?>	
	<label>Elija el tipo de desecho que desea buscar: </label>
		<?php $opciones = array(
				'papel' => 'papel',
				'carton' => 'carton',
				'botellasp' => 'botellasp',
				'vidrio' => 'vidrio',
				'otro' => 'otro',	
				); 
		echo form_dropdown('option', $opciones, 'papel'); ?>
	
		<?= form_submit('', 'Buscar'); ?>
	</form>

