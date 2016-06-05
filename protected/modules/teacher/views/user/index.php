<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

//$this->breadcrumbs=array(
//	'Users',
//);
//
//$this->menu=array(
//	array('label'=>'Create User', 'url'=>array('create')),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
//?>

<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Новые пользователи</li>
</ol>


<table class="table">
	<tr>
		<th>Имя</th>
		<th>Email</th>
		<th class="col-md-2">Подтверждение регистрации</th>
		<th class="col-md-2">Отклонение регистрации</th>
	</tr>
	<?php
	$users = User::model()->findAllByAttributes(array('groupId'=>-1));
	foreach ($users as $user)
	{
		echo "<tr>";
		echo "<td>".$user->login."</td>";
		echo "<td>".$user->email."</td>";
		echo "<td><a href='index.php?r=teacher/user/confirm&id=".$user->id."'><i class='fa fa-user-plus'></i></a> </td>";
		echo "<td><a href='index.php?r=teacher/user/deny&id=".$user->id."'><i class='fa fa-user-times'></i></a> </td>";
		echo "</tr>";
	}
	?>
</table>
