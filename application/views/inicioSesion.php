<html Lang="es">
	<head>
		<title>Busqueda</title>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.css">
				
	</head>
	<body style="background-color:black;">
		<div class="container-fluid">
		<div class="row">
  			<div class="col-xs-12 col-md-8" >

  			</div>
 		    <div class="col-xs-6 col-md-4 well" >
 		    	<?php echo form_open('inicio/login');?>
 		    	<div class="input-group">
 		    		<input type="text" name="user" class="form-control" placeholder="Usuario" required="" autofocus="">
	        		<input type="password" name="pass" class="form-control" placeholder="Contraseña" required="">
	        		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar
					</button>
	        	</div>
 		    	<?php echo form_close();?>
 		    	<?php
 		    		if(isset($mensaje))
 		    		{
 		    			if($mensaje==1)
 		    			{
 		    				echo "<div class='alert alert-danger'>
					<p> Su usuario o contraseña son incorrectas</p>
					</div>";
 		    			}
 		    		
					}
					else
						echo "<br><hr>";
				?>
 		    	
 		    	<h5>¿No está registrado?</h5>
 		    	<a href="<?php echo base_url();?>index.php/registro">Registrarse</a>

 		    </div>
		</div>

		
			</div>
		
		<footer>
			<canvas></canvas>
		</footer>
	</body>
</html>