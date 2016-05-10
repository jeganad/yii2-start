<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authClientCollection' => [
            'class'   => \yii\authclient\Collection::className(),
            'clients' => [
                'facebook' => [
                    'class'        => 'dektrium\user\clients\Facebook',
                    'clientId'     => 'CLIENT_ID',
                    'clientSecret' => 'CLIENT_SECRET',
                ],
                'twitter' => [
                    'class'          => 'dektrium\user\clients\Twitter',
                    'consumerKey'    => 'CONSUMER_KEY',
                    'consumerSecret' => 'CONSUMER_SECRET',
                ],
                'google' => [
                    'class'        => 'dektrium\user\clients\Google',
                    'clientId'     => 'CLIENT_ID',
                    'clientSecret' => 'CLIENT_SECRET',
                ],
                'vkontakte' => [
                    'class'        => 'dektrium\user\clients\VKontakte',
                    'clientId'     => '5352489',
                    'clientSecret' => 'wPdEA8UDjPZZYkd0vNBW',
                ],
                'yandex' => [
                    'class'        => 'dektrium\user\clients\Yandex',
                    'clientId'     => '678c780ab3ac45138be809bd023529b1',
                    'clientSecret' => '913f40b30cb447378386e1a529d311d6'
                ],
            ],
        ],
        'mymessages' => [
            'class'    => 'vision\messages\components\MyMessages',
            'modelUser' => 'dektrium\user\models\User',
            'nameController' => 'site',
            'attributeNameUser' => 'username',
            'admins' => ['admin', 7],
            'enableEmail' => true,
            'getEmail' => function($user_model) {
                return $user_model->email;
            },
            'getLogo' => function($user_id) {
                return '\img\ghgsd.jpg';
            },
            'templateEmail' => [
                'html' => 'private-message-text',
                'text' => 'private-message-html'
            ],
            'subject' => 'Private message'
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                ],
                'email' => [
                    'class' => 'yii\log\EmailTarget',
                    'levels' => ['error', 'warning'],
                    'message' => [
                        'to' => ['admin@example.com', 'developer@example.com'],
                        'subject' => 'Новое сообщение логгера example.com',
                    ],
                ],
            ],
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
        ],
        'rbac' => [
            'class' => 'dektrium\rbac\Module',
        ],
        'sitemap' => [
            'class' => 'himiklab\sitemap\Sitemap',
            'models' => [
                [
                    'class' => 'common\models\CategoryBlogs',
                    'behaviors' => [
                        'sitemap' => [
                            'class' => \himiklab\sitemap\behaviors\SitemapBehavior::className(),
                            'scope' => function ($model) {
                                /** @var \yii\db\ActiveQuery $model */
                                $model->select(['title', 'alias', 'seo_pages_id']);
                            },
                            'dataClosure' => function ($model) {
                                /** @var self $model */
                                return [
                                    'loc' => 'https://tuttyworld.ru/blog/' . $model->alias,
                                    'lastmod' => \common\models\SeoPages::findOne(['id' => $model->seo_pages_id])->updated_at,
                                    'changefreq' => \himiklab\sitemap\behaviors\SitemapBehavior::CHANGEFREQ_DAILY,
                                    'priority' => 0.5
                                ];
                            }
                        ],
                    ],
                ],
            ],
            'urls'=> [
                [
                    'loc' => '/',
                    'lastmod' => '2016-03-20T12:00:00+00:00',
                    'changefreq' => \himiklab\sitemap\behaviors\SitemapBehavior::CHANGEFREQ_DAILY,
                    'priority' => 0.5,
                ],
            ],
            'enableGzip' => true, // default is false
            'cacheExpire' => 1, // 1 second. Default is 24 hours
        ],
    ],
];
