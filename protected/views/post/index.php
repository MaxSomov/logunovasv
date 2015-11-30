<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

/* @TODO СДЕЛАТЬ СОРТИРОВКУ ПО ВРЕМЕНИ */
?>

<h1>Новости</h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li class="active">Новости</li>
</ol>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
