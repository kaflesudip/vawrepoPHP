<?php
/* @var $this VawHackAppIncidentController */
/* @var $model VawHackAppIncident */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incident_title'); ?>
		<?php echo $form->textField($model,'incident_title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incident_date'); ?>
		<?php echo $form->textField($model,'incident_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incident_time'); ?>
		<?php echo $form->textField($model,'incident_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incident_district_id'); ?>
		<?php echo $form->textField($model,'incident_district_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incident_source_id'); ?>
		<?php echo $form->textField($model,'incident_source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incident_source_url'); ?>
		<?php echo $form->textField($model,'incident_source_url',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'death_number'); ?>
		<?php echo $form->textField($model,'death_number',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'injured_number'); ?>
		<?php echo $form->textField($model,'injured_number',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verified'); ?>
		<?php echo $form->textField($model,'verified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->