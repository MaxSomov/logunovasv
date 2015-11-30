<?php
/* @var $this PostController */
/* @var $data Post */
?>

<h2>
	<a href="index.php?r=post/view&id=<?php echo $data->id; ?>"><?php echo $data->head;?></a>
</h2>
<p><i class="fa fa-clock-o"></i> <?php echo date('d.m.Y, H:i', $data->date); ?></p>
<br>
<?php echo $data->content; ?><br>
<a class="btn btn-primary" href="index.php?r=post/view&id=<?php echo $data->id; ?>">Читать далее <i class="fa fa-angle-right"></i></a>
<hr>