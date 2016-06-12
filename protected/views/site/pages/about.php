<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Обо мне';
$about = About::model()->findByPk(1);
//$this->breadcrumbs=array(
//	'About',
//);
?>
<div class="container">
<h1>Обо мне</h1>

<ol class="breadcrumb">
	<li><a href="index.php">Главная</a>
	</li>
	<li class="active">Обо мне</li>
</ol>

<?php echo $about->content; ?>

</div>