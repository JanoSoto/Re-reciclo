<div class="panel panel-default">
		
		<div class="panel-heading">Desechos disponibles</div>
		<table class="table">
		<thead>
			<tr>
				<th>Desecho</th>
				<th>Cantidad</th>
				<th>Propietario</th>
			</tr>
		</thead>
		<tbody>
		<?php if($desechos != NULL){?>
			<?php foreach($desechos->result() as $elem) { ?>
				<tr>
					<td><?= $elem->NOMBRE_TIPO; ?></td>
					<td><?= $elem->CANTIDAD_DESECHO; ?></td>
					<td>
						<?= $elem->NOMBRE_RECICLADOR;?>
						   <?= $elem->APELLIDO_PAT_RECICLADOR?>
					</td>
				</tr>
			<?php } 
		}
		else { ?>
				<tr>
					<td></td>
				</tr>	
				<h4>No hay desechos en esta catergoría</h4>
		<?php }?>
		</tbody>
		</table>
	</div>

</body>