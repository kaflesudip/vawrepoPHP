<?php
/* @var $this VawHackAppDistrictController */
/* @var $data VawHackAppDistrict */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('district_name')); ?>:</b>
	<?php echo CHtml::encode($data->district_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zone_id')); ?>:</b>
	<?php echo CHtml::encode($data->zone_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />


</div>