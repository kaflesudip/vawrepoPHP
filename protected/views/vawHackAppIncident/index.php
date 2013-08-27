<?php
/* @var $this VawHackAppIncidentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vaw Hack App Incidents',
);

$this->menu=array(
	array('label'=>'Create VawHackAppIncident', 'url'=>array('create')),
	array('label'=>'Manage VawHackAppIncident', 'url'=>array('admin')),
);
?>

<h1>Vaw Hack App Incidents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
