<?php

use yii\base\Event;
use dektrium\user\controllers\SecurityController;
use dektrium\user\events\AuthEvent;

Yii::setAlias('@base', realpath(__DIR__.'/../../'));
Yii::setAlias('@common', realpath(__DIR__.'/../../common'));
Yii::setAlias('@frontend', realpath(__DIR__.'/../../frontend'));
Yii::setAlias('@backend', realpath(__DIR__.'/../../backend'));
Yii::setAlias('@console', realpath(__DIR__.'/../../console'));
Yii::setAlias('@storage', realpath(__DIR__.'/../../storage'));
Yii::setAlias('@tests', realpath(__DIR__.'/../../tests'));

/**
 * Setting url aliases
 */
Yii::setAlias('@frontendUrl', 'http://sandro.deb');
Yii::setAlias('@backendUrl',  'http://backend.sandro.deb');
Yii::setAlias('@storageUrl',  'http://storage.sandro.deb');
Yii::setAlias('@media',  'http://sandro.deb/media');




Event::on(SecurityController::class, SecurityController::EVENT_AFTER_AUTHENTICATE, function (AuthEvent $e) {
    if ($e->account->user === null) {
        return;
    }
    switch ($e->client->getName()) {
        case 'facebook':
            $e->account->user->profile->updateAttributes([
                'name' => $e->client->getUserAttributes()['name'],
            ]);
        case 'vkontakte':
    }
});