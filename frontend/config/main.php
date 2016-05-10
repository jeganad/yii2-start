<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'homeUrl'=>dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'language'=>'ru-RU',
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en',
                    'fileMap' => [
                        'main' => 'main.php',
                        'package' => 'package.php',
                        'sign' => 'sign.php',
                        'mail' => 'mail.php',
                    ],
                ],
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'common\components\LangUrlManager',
            'rules' => require(__DIR__ . '/urlManager.php'),
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@frontend/user/views',
                ],
            ],
        ],
    ],
    'modules' => [
        'user' => [
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
    ],
    'controllerMap'=>[
        'file-manager-elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['?'],
//            'disabledCommands' => ['netmount'],
            'roots' => [
                [
                    'baseUrl' => '@webUrl',
                    'basePath' => '@web',
//                    'driver' => 'LocalFileSystem',
//                    'baseUrl' => 'http://sandro.deb',
//                    'basePath' => 'uploads/',
//                    'path'   => 'uploads/',
                    'access' => ['read' => '?', 'write' => '?']
                ]
            ]
        ]
    ],
    'params' => $params,
];
