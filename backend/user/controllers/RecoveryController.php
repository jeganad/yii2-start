<?php

namespace backend\user\controllers;

use dektrium\user\controllers\RecoveryController as BaseController;

class RecoveryController extends BaseController
{
    /** @inheritdoc */
    public function actions()
    {
        $this->layout = 'main';
    }
}
