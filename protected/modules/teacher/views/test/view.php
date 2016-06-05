<?php
/* @var $this TestController */
/* @var $model Test */

?>

    <ol class="breadcrumb">
        <li>
            <a href="index.php?r=teacher">Панель учителя</a>
        </li>
        <li>
            <a href="index.php?r=teacher/test">Тесты</a>
        </li>
        <li class="active"><?php echo $model->name; ?></li>
    </ol>
<div class="col-md-8">
<?php

$questions = Question::model()->findAllByAttributes(array("test_id" => $model->id));

foreach ($questions as $question) {
    $answers = Answer::model()->findAllByAttributes(array("question_id"=>$question->id));
    ?>

    <table class="table">
        <thead>
        <tr><th><?php echo $question->question; ?></th></tr>
        </thead>
        <tbody>
        <?php
        foreach ($answers as $answer)
        {
            ?>
            <tr <?php if ($answer->istrue == 1) echo "class='success'"?>><td><?php echo $answer->answer; ?></td></tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <?php
}

?>
</div>
<div class="col-md-4">
    <div class="list-group">
        <a href="index.php?r=teacher/test/update&id=<?php echo $model->id; ?>" class="list-group-item"><i class="fa fa-pencil"></i> Редактировать</a>
        <a href="#" class="list-group-item"><i class="fa fa-times"></i> Удалить</a>
    </div>
</div>
