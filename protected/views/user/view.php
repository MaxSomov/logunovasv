<?php
/* @var $this UserController */
/* @var $model User */

//$this->breadcrumbs=array(
//	'Users'=>array('index'),
//	$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Create User', 'url'=>array('create')),
//	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
?>

<h1><?php echo $model->login; ?></h1>

<ol class="breadcrumb">
	<li><a href="index.php">Главная</a>
	</li>
	<li><a href="index.php?r=user/index">Пользователи</a></li>
	<li class="active"><?php echo $model->login;?></li>
</ol>


