<?php
// Here you can initialize variables that will be available to your tests
require_once(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
new yii\web\Application(
   require(__DIR__ . '/../../config/web.php')
);