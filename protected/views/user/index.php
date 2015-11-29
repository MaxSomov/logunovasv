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
?>

<h1>Пользователи</h1>

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>

<ol class="breadcrumb">
	<li><a href="index.php">Главная</a>
	</li>
	<li class="active">Пользователи</li>
</ol>
<table class="table">
<?php
	$usersList = User::model()->findAll();
	foreach($usersList as $user)
	{
		?>
			<tr><td><a href="index.php?r=user/view&id=<?php echo $user->id; ?>"><?php echo $user->login; ?></a></td></tr>
<?php
	}
?>
</table>
