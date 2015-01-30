<table class="table table-bordered table-striped">
	<thead class="thead">
		<tr>
			<td class='span2'>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('puesto')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('tipoUsuario_did')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?></b>
		</td>
		<?php /*
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena')); ?></b>
		</td>
		*/ ?>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('estatus_did')); ?></b>
		</td>
		<td >
			<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCreacion_f')); ?></b>
		</td>
		
		</tr>
	</thead>