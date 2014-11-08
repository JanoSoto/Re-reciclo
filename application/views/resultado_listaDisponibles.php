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
			<!--?= form_open('transaccion/insertar') ?-->
			<?php foreach($desechos->result() as $elem) { ?>
				<tr>
					<td><?= $elem->NOMBRE_TIPO; ?></td>
					<td><?= $elem->CANTIDAD_DESECHO; ?></td>
					<td>
						<?= $elem->NOMBRE_RECICLADOR;?>
						    <?= $elem->APELLIDO_PAT_RECICLADOR?>
					</td>
					<td><a class="btn btn-info active" href="<?php echo base_url();?>index.php/transaccion?id_rec=<?php echo $id;?>&id_des=<?php echo $elem->ID_RECICLADOR?>&id_desecho=<?php echo $elem->ID_DESECHO?>&nom=<?php echo $elem->NOMBRE_RECICLADOR?>&ape=<?php echo $elem->APELLIDO_PAT_RECICLADOR ?>">Adquirir</a></td>

				</tr>
			<?php } 
			}
			else { ?>
					<tr>
						<td></td>
					</tr>	
					<h4>No hay desechos en esta catergoría</h4>
			<?php }?>
			</form>
		</tbody>
		</table>
	</div>

</body>