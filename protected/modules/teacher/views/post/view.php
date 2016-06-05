<?php
/* @var $this PostController */
/* @var $model Post */

?>

<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li>
		<a href="index.php?r=teacher/post">Записи</a>
	</li>
	<li class="active"><?php echo $model->head; ?></li>
</ol>

<div class="col-md-8">
	<i class="fa fa-clock-o"></i> <?php echo date("d.m.Y, H:i", $model->date);?><br>
	<i class="fa fa-eye"></i> <?php echo $model->views;?>
	<hr>
	<?php echo $model->content; ?>
</div>
<div class="col-md-4">
	<div class="list-group">
		<a href="index.php?r=teacher/post/update&id=<?php echo $model->id; ?>" class="list-group-item"><i class="fa fa-pencil"></i> Редактировать</a>
		<a href="#" class="list-group-item"><i class="fa fa-times"></i> Удалить</a>
	</div>
</div>

