<?php
/* @var $this SubjectsController */
/* @var $dataProvider CActiveDataProvider */


?>

<div class="container">

<h1>Уроки</h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li class="active">Домашнее задание</li>
</ol>

<?php
$subjects = Subjects::model()->findAll()
?>

<table class="table table-bordered">
	<tbody>
	<?php
	foreach ($subjects as $subject)
	{
		?>
		<tr>
			<td><a href="index.php?r=/subjects/view&id=<?php echo $subject->id; ?>"><?php echo $subject->name; ?></a> </td>
			<td><?php echo $subject->homework; ?></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
</div>