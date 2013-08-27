<?php
/* @var $this VawHackAppIncidentController */
/* @var $model VawHackAppIncident */

$this->breadcrumbs=array(
	'Vaw Hack App Incidents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VawHackAppIncident', 'url'=>array('index')),
	array('label'=>'Create VawHackAppIncident', 'url'=>array('create')),
	array('label'=>'Update VawHackAppIncident', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VawHackAppIncident', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VawHackAppIncident', 'url'=>array('admin')),
);
?>

<h1>View VawHackAppIncident #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'incident_title',
		'incident_date',
		'incident_time',
		'incident_district_id',
		'incident_source_id',
		'incident_source_url',
		'death_number',
		'injured_number',
		'verified',
		'description',
	),
)); ?>
