<?php

namespace backend\user\controllers;

use dektrium\user\controllers\RegistrationController as BaseController;

class RegistrationController extends BaseController
{
    /** @inheritdoc */
    public function actions()
    {
        $this->layout = 'main';
    }
}
