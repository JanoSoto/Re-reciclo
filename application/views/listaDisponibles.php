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
	<?= form_open('listaDisponibles/mostrar_disponibles'); ?>	
	<label>Elija el tipo de desecho que desea buscar: </label>
		<?php $opciones = array(
				'papel' => 'papel',
				'carton' => 'carton',
				'botellasp' => 'botellasp',
				'vidrio' => 'vidrio',
				'otro' => 'otro',	
				); 
		echo form_dropdown('option', $opciones, 'papel'); ?>
	
		<?= form_submit('', 'Buscar') ?> 
	</form>

