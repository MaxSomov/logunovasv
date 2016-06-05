<?php
/* @var $this UserController */
/* @var $model User */
//
//$this->breadcrumbs=array(
//	'Users'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);
//
//$this->menu=array(
//	array('label'=>'List User', 'url'=>array('index')),
//	array('label'=>'Create User', 'url'=>array('create')),
//	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage User', 'url'=>array('admin')),
//);
//?>
<div class="container">

	<?php
		if(Yii::app()->user->getId()!=$model->id)
			echo "<h1>У Вас недостаточно прав доступа для редактирования данного профиля</h1>";
	else {
		?>

		<h1>Редактирование профиля</h1>

        <ol class="breadcrumb">
            <li><a href="index.php">Главная</a>
            </li>
            <li><a href="index.php?r=user/index">Пользователи</a></li>
            <li><a href="index.php?r=user/view&id=<?php echo $model->id;?>"><?php echo $model->login; ?></a></li>
            <li class="active">Редактирование профиля</li>
        </ol>

		<?php $this->renderPartial('_form', array('model'=>$model));
		?>

		</div>

		<?php
	}
		?>