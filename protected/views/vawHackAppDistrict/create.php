<?php
/* @var $this VawHackAppDistrictController */
/* @var $model VawHackAppDistrict */

$this->breadcrumbs=array(
	'Vaw Hack App Districts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VawHackAppDistrict', 'url'=>array('index')),
	array('label'=>'Manage VawHackAppDistrict', 'url'=>array('admin')),
);
?>

<h1>Create VawHackAppDistrict</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>