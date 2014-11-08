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
			<p class="pull-right">Bienvenido <a href="<?php echo base_url();?>" style="color:white;"><?php echo $user; ?></a></p>
		</ul>
		<br>
		<div class="container">
			<a href="<?php echo base_url();?>index.php/home?id=<?php echo $id; ?>" ><button class="btn btn-info pull-right">Volver</button></a>
			<br>
		</div>
		<br>
		<div class="container well col-lg-12">
			<div class="col-lg-10 col-sm-10 col-md-10 table-responsive">
				<table class="table ">
					<thead>
						<tr>
							<th scope="col"><h4>Material</h4></th>
							<th scope="col"><h4>Persona/Institución</h4></th>
							<th scope="col"><h4>Ranking</h4></th
							<th scope="col"><h4> </h4></th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Papel
							</td>
							<td>Waleska
							</td>
							<td> 1
							</td>
							<td><button class='btn btn-success'>¡Ven por el!</button>
							</td>
						</tr>
					
					</tbody>
				</table>
			</div>
		</div>

		
		<footer>
			<canvas></canvas>
		</footer>
	</body>
</html>