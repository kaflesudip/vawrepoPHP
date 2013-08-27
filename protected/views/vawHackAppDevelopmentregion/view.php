<?php
/* @var $this VawHackAppDevelopmentregionController */
/* @var $model VawHackAppDevelopmentregion */

$this->breadcrumbs=array(
	'Vaw Hack App Developmentregions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VawHackAppDevelopmentregion', 'url'=>array('index')),
	array('label'=>'Create VawHackAppDevelopmentregion', 'url'=>array('create')),
	array('label'=>'Update VawHackAppDevelopmentregion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VawHackAppDevelopmentregion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VawHackAppDevelopmentregion', 'url'=>array('admin')),
);
?>

<h1>View VawHackAppDevelopmentregion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'region_name',
	),
)); ?>
