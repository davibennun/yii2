<?php

namespace app\controllers;

use \yii\web\Controller;

class SiteController extends Controller
{
	public function actionIndex()
	{
		return $this->render('homepage');
	}

	public function actionDocs()
	{
		return $this->render('docindex.md');
	}

}