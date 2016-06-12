<?php
/* @var $this AboutController */
/* @var $model About */

//$this->breadcrumbs=array(
//	'Abouts'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List About', 'url'=>array('index')),
//	array('label'=>'Create About', 'url'=>array('create')),
//	array('label'=>'View About', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage About', 'url'=>array('admin')),
//);
?>

<h1>Обо мне</h1>

	<ol class="breadcrumb">
		<li>
			<a href="index.php?r=teacher">Панель учителя</a>
		</li>
		<li class="active">Обо мне</li>
	</ol>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>