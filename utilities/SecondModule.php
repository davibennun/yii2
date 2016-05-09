<?php

namespace app\utilities;
use yii\base\Module;

class SecondModule extends Module
{
	
	public function init()
	{
		parent::init();
		$this->modules = [
			'thirdlevel' => [
				'class' => 'app\utilities\ThirdModule',
				'basePath' => '@app'
			]
		];
	}

}