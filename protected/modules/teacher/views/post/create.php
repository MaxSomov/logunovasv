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
	<li class="active">Новая запись</li>
</ol>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>