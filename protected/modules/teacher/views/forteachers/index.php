<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Коллегам</li>
</ol>

<table class="table table-bordered">
	<thead><tr><th><a href="index.php?r=teacher/forteachers/create"><i class="fa fa-plus-circle"></i> Добавить запись</a></th></tr></thead>
	<tbody>
	<?php
	$postslist = Forteachers::model()->findAll();
	foreach($postslist as $post)
	{
		?>
		<tr>
			<td><a href="index.php?r=teacher/forteachers/view&id=<?php echo $post->id; ?>"> <?php echo $post->head; ?></a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>