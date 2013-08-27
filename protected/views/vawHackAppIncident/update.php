<?php
/* @var $this VawHackAppIncidentController */
/* @var $model VawHackAppIncident */

$this->breadcrumbs=array(
	'Vaw Hack App Incidents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VawHackAppIncident', 'url'=>array('index')),
	array('label'=>'Create VawHackAppIncident', 'url'=>array('create')),
	array('label'=>'View VawHackAppIncident', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VawHackAppIncident', 'url'=>array('admin')),
);
?>

<h1>Update VawHackAppIncident <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>