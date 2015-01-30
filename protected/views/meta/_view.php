	<tr>
		<td style="width:50px">
			<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
		<td style="text-align:right" class="span2">
			<?php echo CHtml::encode($data->fecha_f); ?>
		</td>
		<td style="text-align:right">
			<?php echo number_format(CHtml::encode($data->ventaTotalMeta)); ?>
		</td>
		<td style="text-align:right">
			<?php echo number_format(CHtml::encode($data->ventaM2Meta)); ?>
		</td>
		<td style="text-align:right">
			<?php echo number_format(CHtml::encode($data->pnpvMeta)); ?>
		</td>
		<td style="text-align:right">
			<?php echo number_format(CHtml::encode($data->porcentajeAvisaMeta)); ?>
		</td>
		<td style="text-align:right">
			<?php echo CHtml::encode($data->descPorcentajeMeta); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->usuario->nombre); ?>
		</td>
		<?php /*
		<td>
			<?php echo CHtml::encode($data->estatus->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->usuario->nombre); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->fechaCreacion_f); ?>
		</td>
		*/ ?>
	</tr>