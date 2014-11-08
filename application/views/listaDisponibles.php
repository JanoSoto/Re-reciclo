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
	<select style="width:176px;">
		<option value="op">Ingrese su opci&oacute;n</option>
		<option value="papel">Papel</option>
		<option value="carton">Cartón</option>
		<option value="botellasp">Botellas plásticas</option>
		<option value="vidrio">Vidrio</option>
		<option value="otro">Otro</option>
	</select>	
	
		<?= form_submit('', 'Buscar') ?> 
	</form>

	<div class="panel panel-default">
		
		<div class="panel-heading">Desechos disponibles</div>
		<table class="table">
		<thead>
			<tr>
				<th>Desecho</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
		<? foreach ($desechos->result() as $desecho) { ?>
			<tr>
				<td><?= $desecho->nombre_tipo ?></td>
				<td><?= $desecho->cantidad_desecho?></td>
			</tr>
		<? } ?>
		</tbody>
		</table>
	</div>
</body>
</html>