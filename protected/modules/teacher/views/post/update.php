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
    <li>
        <a href="index.php?r=teacher/post/view&id=<?php echo $model->id; ?>"><?php echo $model->head;?></a>
    </li>
    <li class="active">Редактирование</li>
</ol>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>