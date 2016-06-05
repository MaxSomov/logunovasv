<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Родителям</li>
</ol>

<table class="table table-bordered">
	<thead><tr><th><a href="index.php?r=teacher/forparents/create"><i class="fa fa-plus-circle"></i> Добавить запись</a></th></tr></thead>
	<tbody>
	<?php
	$postslist = Forparents::model()->findAll();
	foreach($postslist as $post)
	{
		?>
		<tr>
			<td><a href="index.php?r=teacher/forparents/view&id=<?php echo $post->id; ?>"> <?php echo $post->head; ?></a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>