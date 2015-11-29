<?php
/* @var $this ForpupilsController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Ученикам</h1>

<ol class="breadcrumb">
<li>
	<a href="index.php">Главная</a>
</li>
<li class="active">Ученикам</li>

</ol>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
