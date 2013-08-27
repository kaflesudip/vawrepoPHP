<?php
/* @var $this VawHackAppDevelopmentregionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vaw Hack App Developmentregions',
);

$this->menu=array(
	array('label'=>'Create VawHackAppDevelopmentregion', 'url'=>array('create')),
	array('label'=>'Manage VawHackAppDevelopmentregion', 'url'=>array('admin')),
);
?>

<h1>Vaw Hack App Developmentregions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
