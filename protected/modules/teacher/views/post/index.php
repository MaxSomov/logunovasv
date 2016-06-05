<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

?>

<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Записи</li>
</ol>

<table class="table table-bordered">
	<thead><tr><th><a href="index.php?r=teacher/post/create"><i class="fa fa-plus-circle"></i> Добавить запись</a></th></tr></thead>
	<tbody>
		<?php
			$posts = Post::model()->findAll();
			foreach ($posts as $post)
			{
				?>
					<tr><td><a href="index.php?r=teacher/post/view&id=<?php echo $post->id; ?>"><?php echo $post->head; ?></a></td></tr>
		<?php
			}
		?>
	</tbody>
</table>
