<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\authclient\widgets\AuthChoice;

/**
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 */

$this->registerCssFile('/theme/admin/assets/globals/plugins/bootstrap-social/bootstrap-social.css', [ 'depends' => [\backend\assets\AppAsset::className()]]);
$this->registerJsFile('/theme/admin/assets/globals/scripts/user-pages.js');

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-login blur-content">
    <div class="panel-heading">
        DASHBOARD
    </div><!--.panel-heading-->
    <div id="pane-login" class="panel-body active">
        <h2><?= $this->title; ?></h2>
        <?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>
        <?php $form = ActiveForm::begin([
            'id'                     => 'login-form',
            'enableAjaxValidation'   => true,
            'enableClientValidation' => false,
            'validateOnBlur'         => false,
            'validateOnType'         => false,
            'validateOnChange'       => false,
        ]) ?>
        <?= $form->field($model, 'login', [
            'inputOptions' => [
                'autofocus' => 'autofocus',
                'class' => 'form-control',
                'tabindex' => '1'
            ],
            'template' => '<div class="inputer"><div class="input-wrapper">{input}</div></div>{error}{hint}',
        ]) ?>
        <?= $form->field($model, 'password', [
            'inputOptions' => [
                'class' => 'form-control',
                'tabindex' => '2'
            ],
            'template' => '<div class="inputer"><div class="input-wrapper">{input}</div></div>{error}{hint}',
        ])->passwordInput()->label(Yii::t('user', 'Password') . ($module->enablePasswordRecovery ? ' (' . Html::a(Yii::t('user', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '5']) . ')' : '')) ?>
        <div class="form-buttons clearfix">
            <?= $form->field($model, 'rememberMe')->checkbox([
                'tabindex' => '4',
                'checkboxTemplate' => '<label class="pull-left">{input}\n{labelTitle}\n\n{error}\n{hint}\n</div>',
            ]) ?>
            <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-success pull-right', 'tabindex' => '3']) ?>
        </div><!--.form-buttons-->
        <?php ActiveForm::end(); ?>
        <hr>
        <div class="social-accounts authSocial">
            <?php $authAuthChoice = AuthChoice::begin([
                'baseAuthUrl' => ['site/auth'],
                'autoRender' => false,
                'options' => ['class' => 'btn-group btn-merged btn-group-justified']
            ]); ?>
            <?php foreach ($authAuthChoice->getClients() as $client): ?>
                <div class="btn-group">
                    <?= Html::a( $client->title, ['site/auth', 'authclient'=> $client->name, ], ['class' => "btn btn-social btn-$client->name"]) ?>
                </div>
            <?php endforeach; ?>
            <?php AuthChoice::end(); ?>
        </div><!--.social-accounts-->
        <hr>
        <ul class="extra-links">
            <?= ($module->enableConfirmation)? '<li><a href="'.Yii::getAlias('@frontendUrl').'/user/registration/resend">'.Yii::t('user', 'Didn\'t receive confirmation message?').'</a></li>' : ''; ?>
            <?= ($module->enableRegistration)? '<li><a href="'.Yii::getAlias('@frontendUrl').'/user/registration/register">'.Yii::t('user', 'Don\'t have an account? Sign up!').'</a></li>' : ''; ?>
            <?= ($module->enablePasswordRecovery)? '<li><a href="'.Yii::getAlias('@frontendUrl').'/user/recovery/request">'.Yii::t('user', 'Forgot password?').'</a></li>' : ''; ?>
        </ul>
    </div>
</div>