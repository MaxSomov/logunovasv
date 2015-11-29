<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li class="active">Ученикам</li>
</ol>

<table class="table table-bordered">
	<thead><tr><th><a href="index.php?r=teacher/forpupils/create"><i class="fa fa-plus-circle"></i> Добавить запись</a></th></tr></thead>
	<tbody>
	<?php
		$postslist = Forpupils::model()->findAll();
	foreach($postslist as $post)
	{
		?>
			<tr>
				<td><a href="index.php?r=teacher/forpupils/view&id=<?php echo $post->id; ?>"> <?php echo $post->head; ?></a></td>
			</tr>
	<?php
	}
	?>
	</tbody>
</table>