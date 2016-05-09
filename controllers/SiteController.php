<?php

namespace app\controllers;

use \yii\web\Controller;

class SiteController extends Controller
{
	public function actionIndex()
	{
		return 'Our CRM';
	}

	public function actionDocs()
	{
		return $this->render('docindex.md');
	}

}