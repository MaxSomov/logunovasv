<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form col-md-7">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    )); ?>



    <?php
    if ($model->isNewRecord) {
        ?>

        <p class="note">Поля, помеченные звездочкой (<span class="required">*</span>), обязательны для заполнения.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'login'); ?>
            <?php echo $form->textField($model, 'login', array('size' => 30, 'maxlength' => 30, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'login'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'email'); ?>
            <?php echo $form->emailField($model, 'email', array('size' => 30, 'maxlength' => 30, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email'); ?>
        </div>
        <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Регистрация' : 'Сохранить', array('class' => 'btn btn-primary')); ?>
        </div>
        <?php
    } ?>





    <?php $this->endWidget(); ?>

    <?php
    if (!$model->isNewRecord) {
        ?>
        <form enctype="multipart/form-data" method="post" action="index.php?r=user/save&id=<?php echo $model->id; ?>">
            <hr>
            <label>Обновить изображение</label>
            <input type="file" name="photo"><hr>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $model->email; ?>">
            <hr>
            <label>Дата рождения:</label>
            <input type="date" name="birthday" value="<?php echo date("Y-m-d", $model->birthday); ?>">
            <hr>
            <label>Пол:</label>
            <select name="sex">
                <option value="1" <?php if($model->sex==1) echo "selected"; ?>>Мужской</option>
                <option value="0" <?php if($model->sex==0) echo "selected"; ?>>Женский</option>
            </select>
            <hr>
            <label>О себе:</label>
            <textarea name="info" rows="15"><?php echo $model->info; ?></textarea><hr>
            <input class="btn btn-primary" value="Сохранить" type="submit">
        </form>
        <?php
    }
    ?>

</div><!-- form -->