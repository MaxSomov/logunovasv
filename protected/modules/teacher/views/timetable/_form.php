<?php
/* @var $this TimetableController */
/* @var $model Timetable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timetable-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'weekday'); ?>
<!--		--><?php //echo $form->textArea($model,'weekday',array('rows'=>6, 'cols'=>50)); ?>
<!--		--><?php //echo $form->error($model,'weekday'); ?>
<!--	</div>-->

	<div class="row">
		<label>Расписание</label>
		<?php echo $form->textArea($model,'list',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'list'); ?>
	</div>

	<div class="row">
		<label>Дополнительная информация</label>
		<?php echo $form->textArea($model,'extra',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'extra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Сохранить', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script src="//cdn.ckeditor.com/4.5.5/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('Timetable_list');
</script>