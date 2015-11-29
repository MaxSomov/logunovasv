<?php


class DefaultController extends Controller
{
	public $layout='//../modules/teacher/views/layouts/teacher';

	public function actionIndex()
	{
		$this->render('index');
	}
}