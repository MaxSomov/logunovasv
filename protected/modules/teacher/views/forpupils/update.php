<?php
/* @var $this ForpupilsController */
/* @var $model Forpupils */

?>

	<ol class="breadcrumb">
		<li>
			<a href="index.php?r=teacher">Панель учителя</a>
		</li>
		<li>
			<a href="index.php?r=teacher/forpupils">Ученикам</a>
		</li>
		<li>
			<a href="index.php?r=teacher/forpupils/view&id=<?php echo $model->id; ?>"><?php echo $model->head;?></a>
		</li>
		<li class="active">Редактирование</li>
	</ol>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>