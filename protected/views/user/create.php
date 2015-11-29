<?php
/* @var $this UserController */
/* @var $model User */

//$this->breadcrumbs=array(
//	'Users'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
?>

    <h1>Регистрация</h1>

    <ol class="breadcrumb">
        <li><a href="index.php">Главная</a>
        </li>
        <li class="active">Регистрация</li>
    </ol>


<?php $this->renderPartial('_form', array('model' => $model)); ?>