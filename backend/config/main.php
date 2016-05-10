<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'name' => 'Dashboard',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'components' => [
        'language' => 'ru-RU',
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
            'class' => 'common\components\LangUrlManager',
            'rules' => require(__DIR__ . '/urlManager.php'),
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views/_element' => '@backend/views/_element',
                    '@dektrium/rbac/views/_element' => '@backend/views/_element',
                    '@dektrium/user/views/layouts' => '@backend/user/views/layouts',
                    '@dektrium/user/views' => '@backend/user/views',
                ],
            ],
        ],
    ],
    'modules' => [
        'user' => [
            'as backend' => 'dektrium\user\filters\BackendFilter',
            'admins' => ['admin'],
            'controllerMap' => [
                'registration' => 'backend\user\controllers\RegistrationController',
                'security' => 'backend\user\controllers\SecurityController',
                'recovery' => 'backend\user\controllers\RecoveryController',
            ]
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'],
            'disabledCommands' => ['netmount'],
            'roots' => [
                [
                    'baseUrl' => '@storageUrl',
                    'basePath' => '@storage',
                    'path'   => '/uploads',
                ]
            ]
        ]
    ],
    'params' => $params,
];
