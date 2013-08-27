<?php
/* @var $this VawHackAppDistrictController */
/* @var $model VawHackAppDistrict */

$this->breadcrumbs=array(
	'Vaw Hack App Districts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VawHackAppDistrict', 'url'=>array('index')),
	array('label'=>'Create VawHackAppDistrict', 'url'=>array('create')),
	array('label'=>'Update VawHackAppDistrict', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VawHackAppDistrict', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VawHackAppDistrict', 'url'=>array('admin')),
);
?>

<h1>View VawHackAppDistrict #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'district_name',
		'zone_id',
		'latitude',
		'longitude',
	),
)); ?>
