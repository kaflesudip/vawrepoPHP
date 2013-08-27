<?php
/* @var $this VawHackAppIncidentController */
/* @var $model VawHackAppIncident */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vaw-hack-app-incident-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'incident_title'); ?>
		<?php echo $form->textField($model,'incident_title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'incident_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incident_date'); ?>
		<?php echo $form->textField($model,'incident_date'); ?>
		<?php echo $form->error($model,'incident_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incident_time'); ?>
		<?php echo $form->textField($model,'incident_time'); ?>
		<?php echo $form->error($model,'incident_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incident_district_id'); ?>
		<?php echo $form->textField($model,'incident_district_id'); ?>
		<?php echo $form->error($model,'incident_district_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incident_source_id'); ?>
		<?php echo $form->textField($model,'incident_source_id'); ?>
		<?php echo $form->error($model,'incident_source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incident_source_url'); ?>
		<?php echo $form->textField($model,'incident_source_url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'incident_source_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'death_number'); ?>
		<?php echo $form->textField($model,'death_number',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'death_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'injured_number'); ?>
		<?php echo $form->textField($model,'injured_number',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'injured_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'verified'); ?>
		<?php echo $form->textField($model,'verified'); ?>
		<?php echo $form->error($model,'verified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->