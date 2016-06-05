<?php
/* @var $this TestController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Тесты</h1>

<ol class="breadcrumb">
	<li>
		<a href="index.php">Главная</a>
	</li>
	<li>
		<a href="index.php?r=forpupil">Ученикам</a>
	</li>
	<li class="active">Тесты</li>
</ol>

<?php

$testIds = UserTest::model()->findAllByAttributes(array("user_id"=>Yii::app()->user->getId()));

$query = "select * from `test` where id != ".$testIds[0]->test_id;
for ($i=1; $i<count($testIds); $i++)
{
	$query = $query." and id != ".$testIds[$i]->test_id;
}


?>
