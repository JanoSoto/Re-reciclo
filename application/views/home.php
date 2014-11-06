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
			<li class="pull-right"><a href="<?php echo base_url();?>">Bienvenido Usuario</a></li>
		</ul>
		<br>
		<div class="container-fluid">
			<div class="row">
			  <div class="col-xs-6 well">
			  	<div class="panel panel-success">
			  		<div class="panel-heading">Tengo cosas para reciclar/reutilizar</div>
  					<div class="panel-body">
    				<center>
    					<button class="btn btn-success"><a href="<?php echo base_url();?>index.php/quieroreciclar">¡Quiero reciclar!</a></button>
    					<br>
    					<br>
    					<button class="btn btn-info">Lista de material en espera</button> 	 	
    				</center>
    				<hr>
    				<div>
    					<p>Le has ahorrado al planeta:</p>
    				</div>
 					</div>

			  	</div>
			  </div>
			  <div class="col-xs-6 well">
				<div class="panel panel-success">
			  		<div class="panel-heading">Busco cosas para reciclar/reutilizar</div>
  					<div class="panel-body">
    				<center>
    					<button class="btn btn-success">Necesito reciclar!</button>
    					<br>
    					<br>
    					<a href="<?php echo base_url();?>index.php/notificaciones"><button class="btn btn-info">Notificaciones en espera  <span class="badge">4</span></button></a>
    				</center>
    				<hr>
    				<div>
    					<p>Le has ahorrado al planeta:</p>
    				</div>
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