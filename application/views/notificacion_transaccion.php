<html>
<head>
	<title>Envío notificación</title>
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
	<div class="well">
		<?php if(isset($msje_result))
			echo $msje_result;
		?>
	</div>
	<button class="btn btn-success "> <a href="../index.php/home?id=<?php echo $id ?>">Volver</a> </button>
</body>
</html>