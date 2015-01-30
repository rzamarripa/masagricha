<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span12">
        
        	<?php if($this->pageCaption !== '') : ?>
		<div class="page-header">
			<h1><?php echo CHtml::encode($this->pageCaption); ?> <small><?php echo CHtml::encode($this->pageDescription)?></small></h1>
		</div>
<?php endif; ?>
        <?php	if(isset($this->menu))
        	{
	            $this->beginWidget('zii.widgets.CPortlet', array(
	                'title'=>'Menú',
	            ));
            }
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'nav nav-tabs'),
            ));
            $this->endWidget();
        ?>
    </div>
</div>
<div class="row">
    <div class="span12">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
</div>
<?php $this->endContent(); ?>