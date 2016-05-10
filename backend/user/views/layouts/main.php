<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\assets\AdminAsset;
use yii\widgets\Breadcrumbs;

AdminAsset::register($this);

?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="bg-login printable">
<?php $this->beginBody() ?>
<div class="login-screen">
    <?= $content ?>
</div><!--.login-screen-->
<div class="bg-blur dark">
    <div class="overlay"></div>
</div>
<?php
$this->registerJs('Pleasure.init();');
$this->registerJs('Layout.init();');
$this->registerJs('UserPages.login();');
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
