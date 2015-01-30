<?php
echo "<?php\n";
$label=$this->class2name($this->modelClass);
echo "\$this->pageCaption='Crear $this->modelClass';
\$this->pageTitle=Yii::app()->name . ' - ' . \$this->pageCaption;
\$this->pageDescription='Crear nuevo ".strtolower($this->modelClass)."';
\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Crear',
);\n";
?>
$this->menu=array(
	array('label'=>'Listar <?php echo $this->modelClass; ?>','url'=>array('index')),
	array('label'=>'Administrar <?php echo $this->modelClass; ?>','url'=>array('admin')),
);
?>


<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
