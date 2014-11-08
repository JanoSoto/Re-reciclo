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

	<div class="panel panel-default">
		<div class="panel-heading">Lista de interesados</div>
			<table class="table">
				<thead>
					<tr>
						<th>Tipo de desecho</th>
						<th>Reciclador</th>
					</tr>	
				</thead>
				<tbody>
					<?php if($espera != NULL){ ?>
					<?php foreach($espera->result() as $elem) { ?>
						<tr>
							<td><?= $elem->NOMBRE_TIPO; ?></td>
							<td>
								<?= $elem->NOMBRE_RECICLADOR;?>
								   <?= $elem->APELLIDO_PAT_RECICLADOR;?>
							</td>
							<td><a class="btn btn-info active" href="#">¡Ven por él!</a> </td>

						</tr>
					<?php }
					} 
					else{ ?>
						<h3>No hay interesados</h3>
					<?php } ?>
				</tbody>
			</table>
			<a class="btn btn-success active" href="../index.php/home?id=<?php echo $id ?>">Volver</a>
	</div>
</body>
</html>