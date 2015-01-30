	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->grupoCostos->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->semana); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->codigo); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->importe); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cantidad); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->descripcion); ?>
		</td>
		<?php /*
		<td>
			<?php echo CHtml::encode($data->unidad); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->familia); ?>
		</td>
		*/ ?>
	</tr>