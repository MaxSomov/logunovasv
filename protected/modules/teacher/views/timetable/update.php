<?php
/* @var $this TimetableController */
/* @var $model Timetable */

//$this->breadcrumbs=array(
//	'Timetables'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List Timetable', 'url'=>array('index')),
//	array('label'=>'Create Timetable', 'url'=>array('create')),
//	array('label'=>'View Timetable', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Timetable', 'url'=>array('admin')),
//);
?>

<h1><?php echo $model->weekday; ?></h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php?r=teacher">Панель учителя</a>
		</li>
		<li>
			<a href="index.php?r=teacher/timetable">Расписание</a>
		</li>
		<li class="active">Редактирование</li>
	</ol>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>