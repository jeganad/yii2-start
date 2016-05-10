<?php

namespace backend\user\controllers;

use dektrium\user\controllers\SecurityController as BaseController;

class SecurityController extends BaseController
{
    /** @inheritdoc */
    public function actions()
    {
        $this->layout = 'main';
    }
}
