<?php
/* @var $this VawHackAppDevelopmentregionController */
/* @var $model VawHackAppDevelopmentregion */

$this->breadcrumbs=array(
	'Vaw Hack App Developmentregions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VawHackAppDevelopmentregion', 'url'=>array('index')),
	array('label'=>'Manage VawHackAppDevelopmentregion', 'url'=>array('admin')),
);
?>

<h1>Create VawHackAppDevelopmentregion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>