<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\SystemLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = Yii::t('backend', 'System Logs');

$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="system-log-index">

    <p>
        <?php echo Html::a(Yii::t('backend', 'Clear'), false, ['class' => 'btn btn-danger', 'data-method'=>'delete']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'level',
                'value'=>function ($model) {
                    return \yii\log\Logger::getLevelName($model->level);
                },
                'filter'=>[
                    \yii\log\Logger::LEVEL_ERROR => 'error',
                    \yii\log\Logger::LEVEL_WARNING => 'warning',
                    \yii\log\Logger::LEVEL_INFO => 'info',
                    \yii\log\Logger::LEVEL_TRACE => 'trace',
                    \yii\log\Logger::LEVEL_PROFILE_BEGIN => 'profile begin',
                    \yii\log\Logger::LEVEL_PROFILE_END => 'profile end'
                ]
            ],
            'category',
            'prefix',
            [
                'attribute' => 'log_time',
                'format' => 'datetime',
                'value' => function ($model) {
                    return (int) $model->log_time;
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                    'view'=>function ($url, $model) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['settings/view-log','id'=>$model['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-eye-open"></span>', $customurl,
                            ['title' => Yii::t('yii', 'View'), 'data-pjax' => '0']);
                    }
                ],
                'template'=>'{view}{delete}'
            ]
        ]
    ]); ?>

</div>