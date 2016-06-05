<?php
/* @var $this TimetableController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Timetables',
//);
//
//$this->menu=array(
//	array('label'=>'Create Timetable', 'url'=>array('create')),
//	array('label'=>'Manage Timetable', 'url'=>array('admin')),
//);
?>

<h1>Расписание</h1>

<ol class="breadcrumb">
    <li>
        <a href="index.php?r=teacher">Панель учителя</a>
    </li>
    <li class="active">Расписание</li>
</ol>

<?php

$timetable = Timetable::model()->findAll();

?>

<table class="table table-bordered">
    <tr>
        <?php for($i=0; $i<7; $i++) echo "<th>".$timetable[$i]->weekday."</th>"; ?>
    </tr>
    <tr>
        <?php for($i=0; $i<7; $i++) echo "<td>".$timetable[$i]->list."</td>" ?>
    </tr>
    <tr>
        <?php for($i=0; $i<7; $i++) echo "<td>".$timetable[$i]->extra."</td>" ?>
    </tr>
    <tr>
        <?php for($i=0; $i<7; $i++) echo "<td><a href='index.php?r=teacher/timetable/update&id=".$timetable[$i]->id."'>Редактировать</a></td>";?>
    </tr>
</table>

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>
