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
<body>
<?php $this->beginBody() ?>
<?= $this->render('/_element/_header'); ?>
<div class="content">
    <div class="page-header full-content">
        <div class="row">
            <div class="col-sm-6">
                <h1><?= Yii::$app->name; ?> <small> <?= $this->title; ?> </small></h1>
            </div><!--.col-->
            <div class="col-sm-6">
                <?= Breadcrumbs::widget([
                    'links'    => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'tag'      => 'ol',
                    'homeLink' => [
                        'label' => '<i class="ion-home"></i>',
                        'url' => '/',
                        'encode' => false,
                    ]
                ]) ?>
            </div>
        </div>
    </div>
        <?= $content ?>
    <div class="footer-links margin-top-40">
        <div class="row no-gutters">
            <div class="col-xs-6 bg-indigo">
                <a href="pages-timeline.html">
                    <span class="state">Pages</span>
                    <span>Timeline</span>
                    <span class="icon"><i class="ion-android-arrow-back"></i></span>
                </a>
            </div>
            <div class="col-xs-6 bg-cyan">
                <a href="components-offline-detector.html">
                    <span class="state">Components</span>
                    <span>Offline Detector</span>
                    <span class="icon"><i class="ion-android-arrow-forward"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->render('/_element/_nav'); ?>
<?php
    $this->registerJs('Pleasure.init();');
    $this->registerJs('Layout.init();');
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
