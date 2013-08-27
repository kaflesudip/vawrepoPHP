<?php
/* @var $this VawHackAppIncidentController */
/* @var $data VawHackAppIncident */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incident_title')); ?>:</b>
	<?php echo CHtml::encode($data->incident_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incident_date')); ?>:</b>
	<?php echo CHtml::encode($data->incident_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incident_time')); ?>:</b>
	<?php echo CHtml::encode($data->incident_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incident_district_id')); ?>:</b>
	<?php echo CHtml::encode($data->incident_district_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incident_source_id')); ?>:</b>
	<?php echo CHtml::encode($data->incident_source_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incident_source_url')); ?>:</b>
	<?php echo CHtml::encode($data->incident_source_url); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('death_number')); ?>:</b>
	<?php echo CHtml::encode($data->death_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('injured_number')); ?>:</b>
	<?php echo CHtml::encode($data->injured_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verified')); ?>:</b>
	<?php echo CHtml::encode($data->verified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	*/ ?>

</div>