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
	<li class="active"><?php echo $model->head;?></li>
</ol>

<div class="col-md-8">
	<?php
	echo $model->content;
	?>
</div>

<div class="col-md-4">
	<div class="list-group">
		<a href="index.php?r=teacher/forteachers/update&id=<?php echo $model->id; ?>" class="list-group-item"><i class="fa fa-pencil"></i> Редактировать</a>
		<a href="#" class="list-group-item"><i class="fa fa-times"></i> Удалить</a>
	</div>
</div>
