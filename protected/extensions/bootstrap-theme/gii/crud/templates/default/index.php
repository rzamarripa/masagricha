<?php
echo "<?php\n";
$label=$this->class2name($this->modelClass);
echo "\$this->pageCaption='$label';
\$this->pageTitle=Yii::app()->name . ' - ' . \$this->pageCaption;
\$this->pageDescription='Listar ".strtolower($label)."';
\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
	array('label'=>'Crear <?php echo $this->modelClass; ?>','url'=>array('create')),
	array('label'=>'Administrar <?php echo $this->modelClass; ?>','url'=>array('admin')),
);
?>

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'headersview' =>'_headersview',
	'footersview' => '_footersview',
	'itemView'=>'_view',
)); ?>
