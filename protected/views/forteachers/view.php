<?php
/* @var $this ForteachersController */
/* @var $model Forteachers */

?>
<h1><?php echo $model->head; ?></h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li>
		<a href="index.php?r=forteachers/">Коллегам</a>
	</li>
	<li class="active"><?php echo $model->head; ?></li>
</ol>

<?php
echo $model->content;
?>
