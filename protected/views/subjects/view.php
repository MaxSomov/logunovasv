<?php
/* @var $this SubjectsController */
/* @var $model Subjects */

?>
<div class="container">
<h1><?php echo $model->name; ?></h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li>
		<a href="index.php?r=subjects">Домашнее задание</a>
	</li>
	<li class="active"><?php echo $model->name;?></li>
</ol>

<?php echo $model->homework; ?>
</div>
