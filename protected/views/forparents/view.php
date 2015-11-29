<?php
/* @var $this ForparentsController */
/* @var $model Forparents */

?>

<h1><?php echo $model->head; ?></h1>

<ol class="breadcrumb">
    <li>
        <a href="index.php">Главная</a>
    </li>
    <li>
        <a href="index.php?r=forparents/">Родителям</a>
    </li>
    <li class="active"><?php echo $model->head; ?></li>
</ol>

<?php
echo $model->content;
?>
