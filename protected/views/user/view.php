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
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php">Главная</a>
        </li>
        <li><a href="index.php?r=user/index">Пользователи</a></li>
        <li class="active"><?php echo $model->login; ?></li>
    </ol>

    <div class="row-fluid">
        <div class="span2">
            <p><img src="images/<?php if (isset($model->photo)) echo $model->photo; else echo "noimage.jpg" ?>"></p>
            <?php
            if (Yii::app()->user->getId() == $model->id) {
                ?>
                <p><a class="btn btn-primary span12" href="index.php?r=user/update&id=<?php echo $model->id; ?>"><i
                            class="fa fa-pencil"></i> Редактирование</a></p>
                <?php
            }
            ?>
        </div>
        <div class="span8">
            <h3><?php echo $model->login; ?></h3>
            <div class="row-fluid">
                <div class="span2" style="margin: 0px;"><i class="fa fa-envelope-o"></i> Email:</div>
                <div class="span10" style="margin: 0px;"><a
                        href="mailto:<?php echo $model->email; ?>"> <?php echo $model->email; ?></a></div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span2" style="margin: 0px;"><i class="fa fa-calendar-check-o"></i> Дата рождения:</div>
                <div class="span10" style="margin: 0px;"><?php echo date("d.m.Y", $model->birthday); ?></div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span2" style="margin: 0px;"><i
                        class="fa fa-<?php if ($model->sex == 0) echo "fe"; ?>male"></i> Пол:
                </div>
                <div class="span10"
                     style="margin: 0px;"><?php if ($model->sex == 1) echo "Мужской"; else echo "Женский"; ?></div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span2" style="margin: 0px;"><i class="fa fa-file-text-o"></i> О себе:</div>
                <div class="span10" style="margin: 0px;"><?php echo $model->info; ?></div>
            </div>
            <hr>
        </div>
    </div>


</div>