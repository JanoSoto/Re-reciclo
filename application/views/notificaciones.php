<html>
<head>
	<title>Lista de interesados</title>
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

	
	<div class="panel panel-info">
		<br>
		<br>
		<div class="panel-heading">Lista de Notificaciones de transacción</div>
			<table class="table">
				<thead>
					<tr>
						<th>Reciclador</th>
						<th>Material</th>
						<th>Cantidad</th>
						<th>Días</th>
						<th>Horario</th>
						<th> </th>
					</tr>	
				</thead>
				<tbody>
					<?php if($espera != NULL){ ?>

					<?php foreach($espera as $elem) { ?>
						<tr>
							<td>
								<?= $elem['NOMBRE_RECICLADOR'];?>
								   <?= $elem['APELLIDO_PAT_RECICLADOR'];?>
							</td>
							<td>
								<?=$elem['NOMBRE_TIPO']; ?>
							</td>
							<td>
								<?=$elem['CANTIDAD_DESECHO']; ?>
							</td>
							<td>
								<?=$elem['FECHA_DESDE_TRANS']; ?>
									-
								<?=$elem['FECHA_HASTA_TRANS']; ?>	
							</td>
							<td>
								<?=$elem['HORA_DESDE_TRANS']; ?>
									-
								<?=$elem['HORA_HASTA_TRANS']; ?>	
							</td>
							
							<td><a class="btn btn-danger active" href="../index.php/notificacion/completartrans?id=<?php echo $id; ?>&trans=<?php echo $elem['ID_TRANS']; ?>">Completar Transacción</a> </td>
							


							

						</tr>
					<?php }
					} 
					else{ ?>
						<h3>No hay notificaciones disponibles</h3>
					<?php } ?>
				</tbody>
			</table>
			<a class="btn btn-success active" href="../index.php/home?id=<?php echo $id ?>">Volver</a>
	</div>
</body>
</html>