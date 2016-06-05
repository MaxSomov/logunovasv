<?php
/* @var $this MailController */
/* @var $data Mail */
?>

<div class="panel panel-<?php if ($data->status==0) echo "info"; else echo "primary";?>">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $data->name; ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $data->message; ?>
        <hr>
        <p><?php echo $data->email;?></p>
        <a href="index.php?r=teacher/mail/view&id=<?php echo $data->id;?>" class="btn btn-default">Подробнее</a>
    </div>
</div>
