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
		<?php if($desechos != NULL){?>
			<?php foreach($desechos->result() as $elem) { ?>
				<tr>
					<td><?= $elem->NOMBRE_TIPO; ?></td>
					<td><?= $elem->CANTIDAD_DESECHO; ?></td>
				</tr>
			<?php } 
		}
		else { ?>
				<tr>
					<td>No hay desechos en esta catergoría</td>
				</tr>	
		<?php }?>
		</tbody>
		</table>
	</div>

</body>