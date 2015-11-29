<?php
/* @var $this ForparentsController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Родителям</h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li class="active">Родителям</li>

</ol>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
