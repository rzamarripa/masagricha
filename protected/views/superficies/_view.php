	<tr>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->temporada); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->empresa->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->lote); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->cultivo); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->hectareas); ?>
		</td>
	</tr>