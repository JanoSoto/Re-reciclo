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
			<li class="pull-right"><a href="<?php echo base_url();?>">Bienvenido <?php echo $user; ?></a></li>
		</ul>
		<br>
		<div class="container-fluid">
			<div class="row">
			  <div class="col-xs-6 well">
			  	<div class="panel panel-success">
			  		<div class="panel-heading">Tengo cosas para reciclar/reutilizar</div>
  					<div class="panel-body">
    				<center>
    					<a class="btn btn-success active" href="<?php echo base_url();?>index.php/quieroreciclar?id=<?php echo $id;?>">¡Quiero reciclar!</a>
    					

    					<br>
    					<br>
    					<a class="btn btn-info active" href="<?php echo base_url();?>index.php/interesados?id=<?php echo $id ?>">Lista de material en espera</a> 	 	
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
    					<a class="btn btn-success active" href="<?php echo base_url();?>index.php/listaDisponibles?id=<?php echo $id ?>">Necesito reciclar!</a>
    					<br>
    					<br>
    					<a class="btn btn-info active" href="<?php echo base_url();?>index.php/notificacion?id=<?php echo $id ?>">Notificaciones en espera  
    						<?php 
    							if($notif!=0) 
    								echo '<span class="badge" style="background-color:red;">'.$notif.'</span>';  
    							else
    								echo '<span class="badge" >'.$notif.'</span>';
    						 ?>
    					</a>

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