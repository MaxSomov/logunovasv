<?php
/* @var $this MailController */
/* @var $model Mail */

?>

<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li>
		<a href="index.php?r=teacher/mail">Сообщения</a>
	</li>
	<li class="active"><?php echo substr($model->message, 0, 8);?>...</li>
</ol>

<div class="col-md-8">
	<i class="fa fa-user"></i> <?php echo $model->name;?><br>
	<i class="fa fa-envelope"></i> <?php echo $model->email;?> <br>
	<i class="fa fa-clock-o"></i> <?php echo date("d.m.Y, H:i", $model->date);?><br>
	<hr>
	<?php echo $model->message; ?>
</div>

<div class="col-md-4">
	<div class="list-group">
		<a href="index.php?r=teacher/mail/changestatus&id=<?php echo $model->id; ?>" class="list-group-item"><i class="fa fa-check-square-o"></i> Прочитано</a>
		<a href="#" class="list-group-item"><i class="fa fa-times"></i> Удалить</a>
	</div>
</div>

