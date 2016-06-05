<?php
/* @var $this ForparentsController */
/* @var $model Forparents */
?>
<ol class="breadcrumb">
        <li>
            <a href="index.php?r=teacher">Панель учителя</a>
        </li>
        <li>
            <a href="index.php?r=teacher/forparents">Родителям</a>
        </li>
        <li class="active">Новая страница</li>
    </ol>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>