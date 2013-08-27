<?php
/* @var $this VawHackAppIncidentController */
/* @var $model VawHackAppIncident */

$this->breadcrumbs=array(
	'Vaw Hack App Incidents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List VawHackAppIncident', 'url'=>array('index')),
	array('label'=>'Create VawHackAppIncident', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vaw-hack-app-incident-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vaw Hack App Incidents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vaw-hack-app-incident-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'incident_title',
		'incident_date',
		'incident_time',
		'incident_district_id',
		'incident_source_id',
		/*
		'incident_source_url',
		'death_number',
		'injured_number',
		'verified',
		'description',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
