<?php
/* @var $this ForpupilsController */
/* @var $model Forpupils */
?>

<div class="container">
<h1><?php echo $model->head; ?></h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li>
		<a href="index.php?r=forpupils/">Ученикам</a>
	</li>
	<li class="active"><?php echo $model->head; ?></li>
</ol>


<?php
echo $model->content;
?>
</div>

