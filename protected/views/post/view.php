<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $user User */

$user = User::model()->findByPk(Yii::app()->user->getId());
?>

<div class="container">
<h1><?php echo $model->head; ?></h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li>
		<a href="index.php?r=post">Новости</a>
	</li>
	<li class="active"><?php echo $model->head;?></li>
</ol>

<?php echo $model->content; ?>

<hr>

<?php
    if (!Yii::app()->user->isGuest)
    {
        ?>
        <div class="well">
            <h4>Комментарии</h4>
            <form role="form" action="index.php?r=post/comment&id=<?php echo $model->id; ?>" method="post">
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
<?php
    }
?>
<br>
<?php
$comments = Comment::model()->findAllByAttributes(array('post_id'=>$model->id), array('order'=>'date DESC'));
foreach ($comments as $comment) {
    $user = User::model()->findByPk($comment->author_id);
    ?>
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="images/<?php echo $user->photo; ?>" width="64px" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading"><?php
                echo $user->login;
                ?>
                <small><?php echo date('d.m.Y, H:i', $comment->date); ?></small>
            </h4>
                <?php echo $comment->content; ?>
            </div>
    </div>
<?php
}
?>

</div>