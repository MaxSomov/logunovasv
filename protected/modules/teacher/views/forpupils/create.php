<?php
/* @var $this ForpupilsController */
/* @var $model Forpupils */

?>

    <ol class="breadcrumb">
        <li>
            <a href="index.php?r=teacher">Панель учителя</a>
        </li>
        <li>
            <a href="index.php?r=teacher/forpupils">Ученикам</a>
        </li>
        <li class="active">Новая страница</li>
    </ol>


<?php $this->renderPartial('_form', array('model' => $model)); ?>