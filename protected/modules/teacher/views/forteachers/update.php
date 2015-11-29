<?php
/* @var $this ForteachersController */
/* @var $model Forteachers */

?>
	<ol class="breadcrumb">
		<li>
			<a href="index.php?r=teacher">Панель учителя</a>
		</li>
		<li>
			<a href="index.php?r=teacher/forteachers">Коллегам</a>
		</li>
		<li>
			<a href="index.php?r=teacher/forteachers/view&id=<?php echo $model->id; ?>"><?php echo $model->head;?></a>
		</li>
		<li class="active">Редактирование</li>
	</ol>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>