<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<ol class="breadcrumb">
	<li class="active">Главная</li>
</ol>

<?php

$posts = Post::model()->findAll(array('order'=>'date DESC'));
$p = array_slice($posts, 0, 5);
foreach ($p as $post)
{
	?>

	<h2>
		<a href="index.php?r=post/view&id=<?php echo $post->id; ?>"><?php echo $post->head;?></a>
	</h2>
	<p><i class="fa fa-clock-o"></i> <?php echo date('d.m.Y, H:i', $post->date); ?></p>
	<br>
	<?php $pices = explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content); echo $pices[0]; ?><br>
	<a class="btn btn-primary" href="index.php?r=post/view&id=<?php echo $post->id; ?>">Читать далее <i class="fa fa-angle-right"></i></a>
	<hr>

<?php
}
?>

<a href="index.php?r=post" class="btn btn-default">Все записи</a>