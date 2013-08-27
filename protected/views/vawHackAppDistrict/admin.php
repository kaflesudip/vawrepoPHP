<?php
/* @var $this VawHackAppDistrictController */
/* @var $model VawHackAppDistrict */

$this->breadcrumbs=array(
	'Vaw Hack App Districts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List VawHackAppDistrict', 'url'=>array('index')),
	array('label'=>'Create VawHackAppDistrict', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vaw-hack-app-district-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Vaw Hack App Districts</h1>

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
	'id'=>'vaw-hack-app-district-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'district_name',
		'zone_id',
		'latitude',
		'longitude',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
