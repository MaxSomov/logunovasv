<?php
/* @var $this ForteachersController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Коллегам</h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li class="active">Коллегам</li>

</ol>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
