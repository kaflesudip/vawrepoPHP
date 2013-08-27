<?php
/* @var $this VawHackAppDevelopmentregionController */
/* @var $model VawHackAppDevelopmentregion */

$this->breadcrumbs=array(
	'Vaw Hack App Developmentregions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VawHackAppDevelopmentregion', 'url'=>array('index')),
	array('label'=>'Create VawHackAppDevelopmentregion', 'url'=>array('create')),
	array('label'=>'View VawHackAppDevelopmentregion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VawHackAppDevelopmentregion', 'url'=>array('admin')),
);
?>

<h1>Update VawHackAppDevelopmentregion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>