<?php
/* @var $this MailController */
/* @var $dataProvider CActiveDataProvider */

?>

<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Сообщения</li>
</ol>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
