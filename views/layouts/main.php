<?php
use yii\helpers\Html;

app\assets\ApplicationUiAssetBundle::register($this);

?>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<html lang="<?= Yii::$app->language ?>">
		<head>
			<meta charset="<?= Yii::$app->charset ?>"/> <title><?= Html::encode($this->title) ?></title> <?php $this->head() ?>
			<?= Html::csrfMetaTags() ?>
		</head>
		<body>
			<?php $this->beginBody() ?> 
				<div class="container">
					<?= $content ?>
					<footer class="footer"><?= Yii::powered();?></footer>
				</div>
			<?php $this->endBody() ?>
		</body>
	</html>
<?php $this->endPage() ?>