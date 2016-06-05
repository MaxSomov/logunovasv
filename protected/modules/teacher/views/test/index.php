<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Тесты</li>
</ol>

<table class="table table-bordered">
	<thead><tr><th><a href="index.php?r=teacher/test/create"><i class="fa fa-plus-circle"></i> Новый тест</a></th></tr></thead>
	<tbody>
	<?php
	$postslist = Test::model()->findAll();
	foreach($postslist as $post)
	{
		?>
		<tr>
			<td><a href="index.php?r=teacher/test/view&id=<?php echo $post->id; ?>"> <?php echo $post->name; ?></a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>