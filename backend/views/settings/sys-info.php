<?php

use yii\helpers\Url;
use common\models\database\User;

/* @var $this yii\web\View */

$this->title = 'System info';
$this->params['breadcrumbs'] = [
        [
            'label' => 'Settings',
            'url' => ['settings/index']
        ],
        $this->title,
];

$this->title = Yii::t('backend', 'System Information');
$this->registerJs("window.paceOptions = { ajax: false }", \yii\web\View::POS_HEAD);
$this->registerJsFile(
    Yii::$app->request->baseUrl . 'js/system-information/index.js',
    ['depends' => ['\yii\web\JqueryAsset', '\backend\assets\Flot', '\yii\bootstrap\BootstrapPluginAsset']]
);

?>

<div class="row">

    <div class="col-md-4">
        <div class="panel red">
            <div class="panel-heading">
                <div class="panel-title"><h4><?= Yii::t('backend', 'Processor') ?></h4></div>
            </div><!--.panel-heading-->
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('backend', 'Processor') ?></dt>
                    <dd><?= $provider->getCpuModel() ?></dd>

                    <dt><?= Yii::t('backend', 'Processor Architecture') ?></dt>
                    <dd><?= $provider->getArchitecture() ?></dd>

                    <dt><?= Yii::t('backend', 'Number of cores') ?></dt>
                    <dd><?= $provider->getCpuCores() ?></dd>
                </dl>
            </div><!--.panel-body-->
        </div><!--.panel-->
    </div><!--.col-->

    <div class="col-md-4">
        <div class="panel pink">
            <div class="panel-heading">
                <div class="panel-title"><h4><?= Yii::t('backend', 'Operating System') ?></h4></div>
            </div><!--.panel-heading-->
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('backend', 'OS') ?></dt>
                    <dd><?= $provider->getOsType() ?></dd>

                    <dt><?= Yii::t('backend', 'OS Release') ?></dt>
                    <dd><?= $provider->getOsRelease() ?></dd>

                    <dt><?= Yii::t('backend', 'Kernel version') ?></dt>
                    <dd><?= $provider->getOsKernelVersion() ?></dd>
                </dl>
            </div><!--.panel-body-->
        </div><!--.panel-->
    </div><!--.col-->

    <div class="col-md-4">
        <div class="panel purple">
            <div class="panel-heading">
                <div class="panel-title"><h4><?= Yii::t('backend', 'Time') ?></h4></div>
            </div><!--.panel-heading-->
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('backend', 'System Date') ?></dt>
                    <dd><?= Yii::$app->formatter->asDate(time()) ?></dd>

                    <dt><?= Yii::t('backend', 'System Time') ?></dt>
                    <dd><?= Yii::$app->formatter->asTime(time()) ?></dd>

                    <dt><?= Yii::t('backend', 'Timezone') ?></dt>
                    <dd><?= date_default_timezone_get() ?></dd>
                </dl>
            </div><!--.panel-body-->
        </div><!--.panel-->
    </div><!--.col-->

</div><!--.row-->
<div class="row">
    <div class="col-md-4">
        <div class="panel deep-purple">
            <div class="panel-heading">
                <div class="panel-title"><h4><?= Yii::t('backend', 'Network') ?></h4></div>
            </div><!--.panel-heading-->
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('backend', 'Hostname') ?></dt>
                    <dd><?= $provider->getHostname() ?></dd>

                    <dt><?= Yii::t('backend', 'Internal IP') ?></dt>
                    <dd><?= $provider->getServerIP() ?></dd>

                    <dt><?= Yii::t('backend', 'External IP') ?></dt>
                    <dd><?= $provider->getExternalIP() ?></dd>

                    <dt><?= Yii::t('backend', 'Port') ?></dt>
                    <dd><?= $provider->getServerVariable('SERVER_PORT') ?></dd>
                </dl>
            </div><!--.panel-body-->
        </div><!--.panel-->
    </div><!--.col-->
    <div class="col-md-4">
        <div class="panel indigo">
            <div class="panel-heading">
                <div class="panel-title"><h4><?= Yii::t('backend', 'Software') ?></h4></div>
            </div><!--.panel-heading-->
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('backend', 'Web Server') ?></dt>
                    <dd><?= $provider->getServerSoftware() ?></dd>

                    <dt><?= Yii::t('backend', 'PHP Version') ?></dt>
                    <dd><?= $provider->getPhpVersion() ?></dd>

                    <dt><?= Yii::t('backend', 'DB Type') ?></dt>
                    <dd><?= $provider->getDbType(Yii::$app->db->pdo) ?></dd>

                    <dt><?= Yii::t('backend', 'DB Version') ?></dt>
                    <dd><?= $provider->getDbVersion(Yii::$app->db->pdo) ?></dd>
                </dl>
            </div><!--.panel-body-->
        </div><!--.panel-->
    </div><!--.col-->

    <div class="col-md-4">
        <div class="panel blue">
            <div class="panel-heading">
                <div class="panel-title"><h4><?= Yii::t('backend', 'Memory') ?></h4></div>
            </div><!--.panel-heading-->
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?= Yii::t('backend', 'Total memory') ?></dt>
                    <dd><?= Yii::$app->formatter->asSize($provider->getTotalMem()) ?></dd>

                    <dt><?= Yii::t('backend', 'Free memory') ?></dt>
                    <dd><?= Yii::$app->formatter->asSize($provider->getFreeMem()) ?></dd>

                    <dt><?= Yii::t('backend', 'Total Swap') ?></dt>
                    <dd><?= Yii::$app->formatter->asSize($provider->getTotalSwap()) ?></dd>

                    <dt><?= Yii::t('backend', 'Free Swap') ?></dt>
                    <dd><?= Yii::$app->formatter->asSize($provider->getFreeSwap()) ?></dd>
                </dl>
            </div><!--.panel-body-->
        </div><!--.panel-->
    </div><!--.col-->
</div><!--.row-->
<div class="row">
    <div class="col-md-4">
        <div class="card tile card-dashboard-info card-teal material-animate">
            <div class="card-body">
                <div class="card-icon"><i class="fa fa-users"></i></div><!--.card-icon-->
                <p class="result"><?= User::find()->count() ?></p>
                <small><i class="fa fa-users"></i> <?= Yii::t('backend', 'User Registrations') ?></small>
            </div>
        </div><!--.card-->
    </div><!--.col-->
    <div class="col-md-4">
        <div class="card tile card-dashboard-info card-light-blue material-animate">
            <div class="card-body">
                <div class="card-icon"><i class="fa fa-cogs"></i></div><!--.card-icon-->
                <p class="result"><?= $provider->getLoadAverage() ?></p>
                <small><i class="fa fa-cogs"></i> <?= Yii::t('backend', 'Load average') ?></small>
            </div>
        </div><!--.card-->
    </div><!--.col-->
    <div class="col-md-4">
        <div class="card tile card-dashboard-info card-blue-grey material-animate">
            <div class="card-body">
                <div class="card-icon"><i class="fa fa-clock-o"></i></div><!--.card-icon-->
                <p class="result"><?= gmdate('H:i:s', $provider->getUptime()) ?></p>
                <small><i class="fa fa-clock-o"></i> <?= Yii::t('backend', 'Uptime') ?></small>
            </div>
        </div><!--.card-->
    </div><!--.col-->
</div><!--.row-->
<div class="row">
    <div class="col-xs-12">
        <div id="cpu-usage" class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">
                    <?= Yii::t('backend', 'CPU Usage') ?>
                </h3>
            </div>
            <div class="box-body">
                <div class="chart" style="height: 300px;">
                </div>
            </div><!-- /.box-body-->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div id="memory-usage" class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">
                    <?= Yii::t('backend', 'Memory Usage') ?>
                </h3>
            </div>
            <div class="box-body">
                <div class="chart" style="height: 300px;">
                </div>
            </div><!-- /.box-body-->
        </div>
    </div>
</div>
