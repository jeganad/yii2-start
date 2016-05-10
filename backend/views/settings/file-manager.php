<?php

use yii\web\JsExpression;
use mihaildev\elfinder\ElFinder;

$this->title = Yii::t('backend', 'File manager');

$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-md-12">
        <div class="panel blue-grey">
            <div class="panel-heading">
                <div class="panel-title"><h4>File manager</h4></div>
            </div>
            <div class="panel-body">
                <?= ElFinder::widget([
                    'language'         => 'ru',
                    'frameOptions' => ['style'=>'min-height: 70vh; width: 100%; border: 0'],
                    'controller'       => 'elfinder',
                    'filter'           => 'image',
                    'callbackFunction' => new JsExpression('function(file, id){}')
                ]);
                ?>
            </div>
        </div>
    </div>
</div>

