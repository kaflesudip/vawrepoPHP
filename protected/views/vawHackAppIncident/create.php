<?php
/* @var $this VawHackAppIncidentController */
/* @var $model VawHackAppIncident */

$this->breadcrumbs=array(
	'Vaw Hack App Incidents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VawHackAppIncident', 'url'=>array('index')),
	array('label'=>'Manage VawHackAppIncident', 'url'=>array('admin')),
);
?>

<h1>Create VawHackAppIncident</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>