<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

//$this->pageTitle=Yii::app()->name . ' - Contact Us';
//$this->breadcrumbs=array(
//	'Contact',
//);
?>

<h1>Контактная информация</h1>

<ol class="breadcrumb">
	<li><a href="index.php">Главная</a>
	</li>
	<li class="active">Контактная информация</li>
</ol>

<div class="row">
	<div class="col-md-8">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4018.644991285154!2d44.90821072099433!3d53.22102050173523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5529d5ed4887fc19!2z0KjQutC-0LvQsCDihJYgMzY!5e0!3m2!1sru!2sru!4v1448634926182" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="col-md-4">
		<p><i class="fa fa-map-marker"></i> Россия, Пензенская область, г. Пенза, ул. Собинова, 6
		<p><i class="fa fa-envelope"></i> <a href="mailto:email@address.com">email@address.com</a>
		<p><i class="fa fa-phone"></i> +7 (987) 654 32 12
		<p><i class="fa fa-skype"></i> <a href="skype:skypename?call">Skype Name</a>
		<p><i class="fa fa-odnoklassniki"></i> <a href="http://ok.ru" target="_blank">Одноклассники</a>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<h2>Отправить сообщение</h2>
		<form action="index.php?r=site/message" method="post">
			<div class="control-group form-group">
					<label>Имя:</label>
					<input name="name" type="text" class="form-control" <?php if (!Yii::app()->user->isGuest) { ?> value="<?php echo Yii::app()->user->name; ?>" <?php }?>>
			</div>
			<div class="control-group form-group">
					<label>E-mail:</label>
					<input name="email" type="email" class="form-control">
			</div>
			<div class="control-group form-group">
					<label>Сообщение:</label>
					<textarea name="message" rows="10" cols="100" class="form-control"maxlength="999" style="resize:none"></textarea>
			</div>
			<!-- For success/fail messages -->
			<button type="submit" class="btn btn-primary">Отправить</button>
		</form>
	</div>

</div>