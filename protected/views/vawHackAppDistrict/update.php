<?php
/* @var $this VawHackAppDistrictController */
/* @var $model VawHackAppDistrict */

$this->breadcrumbs=array(
	'Vaw Hack App Districts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VawHackAppDistrict', 'url'=>array('index')),
	array('label'=>'Create VawHackAppDistrict', 'url'=>array('create')),
	array('label'=>'View VawHackAppDistrict', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VawHackAppDistrict', 'url'=>array('admin')),
);
?>

<h1>Update VawHackAppDistrict <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>