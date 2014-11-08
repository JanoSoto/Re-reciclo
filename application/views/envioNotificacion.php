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
	<a href="<?php echo base_url();?>index.php/home?id=<?php echo $id; ?>" ><button class="btn btn-info pull-right">Volver</button></a>
	<center>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Notificar a reciclador</h3>
			</div>
			<div class="panel-body">
				<h4>Indique entre que días y horas el reciclador puede ir a buscar el desecho</h4>
				<?= form_open('notificacion/updateNotificacion' .'?id='. $id .'&id_trans=' .$id_trans); ?>

					<br>
					<div>
						<span>Desde:        </span><input type="date" name="fecha_desde"><span>   hasta   </span><input type="date" name="fecha_hasta">
					</div>
					<br>	
					<div>
						<span>Entre las </span><input type="time" name="hora_desde" value="12:00" max="23:00" min="9:00" step="1"><span>   hasta las    </span><input type="time" name="hora_hasta" value="12:00" max="23:00" min="9:00" step="1">
					</div>
					<br>
					<div>
						<textarea type="textarea" name="comentario" placeholder="Agregue un comentario..." style="width:50%; height:100px;"></textarea>
					</div>
					<br>
				<?= form_submit('', 'Enviar'); ?>

				</form>
			</div>
		</div>
	</center>
</body>
</html>