<?php
/* @var $this TimetableController */
/* @var $data Timetable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weekday')); ?>:</b>
	<?php echo CHtml::encode($data->weekday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list')); ?>:</b>
	<?php echo CHtml::encode($data->list); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extra')); ?>:</b>
	<?php echo CHtml::encode($data->extra); ?>
	<br />


</div>