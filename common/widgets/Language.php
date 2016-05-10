<?php
namespace common\widgets;
//use common\models\database\Lang;

class Language extends \yii\bootstrap\Widget
{
    public function init(){}

    public function run() {
        return $this->render('language', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->where('id != :current_id', [':current_id' => Lang::getCurrent()->id])->all(),
        ]);
    }
}