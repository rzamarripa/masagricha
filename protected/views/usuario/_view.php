	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->puesto); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->tipoUsuario->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->usuario); ?>
		</td>
		<?php /*
		<td>
			<?php echo CHtml::encode($data->contrasena); ?>
		</td>
		*/ ?>
		<td>
			<?php echo CHtml::encode($data->estatus->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCreacion_f); ?>
		</td>
		
	</tr>