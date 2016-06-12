<?php
/* @var $this SubjectController */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>Уроки</h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Уроки</li>
</ol>

<?php 
	$subjects = Subjects::model()->findAll()
?>

<table class="table table-bordered">
	<thead><tr><th colspan="2"><a href="index.php?r=teacher/subject/create"><i class="fa fa-plus-circle"></i> Добавить урок</a></th></tr></thead>
	<tbody>
	<?php
		foreach ($subjects as $subject)
		{
			?>
			<tr>
				<td><a href="index.php?r=teacher/subject/update&id=<?php echo $subject->id; ?>"><?php echo $subject->name; ?></a> </td>
				<td><?php echo $subject->homework; ?></td>
			</tr>
	<?php
		}
	?>
	</tbody>
</table>
