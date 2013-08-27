<?php
/* @var $this VawHackAppDistrictController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vaw Hack App Districts',
);

$this->menu=array(
	array('label'=>'Create VawHackAppDistrict', 'url'=>array('create')),
	array('label'=>'Manage VawHackAppDistrict', 'url'=>array('admin')),
);
?>

<h1>Vaw Hack App Districts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
