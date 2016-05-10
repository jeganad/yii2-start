<?php

namespace backend\controllers;

use Yii;
use probe\Factory;
use yii\web\Response;
use backend\models\SystemLog;
use backend\models\search\SystemLogSearch;
use yii\web\NotFoundHttpException;

class SettingsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSysInfo()
    {
        $provider = Factory::create();
        if ($provider) {
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                if ($key = Yii::$app->request->get('data')) {
                    switch($key){
                        case 'cpu_usage':
                            return$provider->getCpuUsage();
                            break;
                        case 'memory_usage':
                            return ($provider->getTotalMem() - $provider->getFreeMem()) / $provider->getTotalMem();
                            break;
                    }
                }
            } else {
                return $this->render('sys-info', ['provider' => $provider]);
            }
        } else {
            return $this->render('fail');
        }
        return $this->render('sys-info');
    }

    /**
     * Lists all SystemLog models.
     * @return mixed
     */
    public function actionIndexLog()
    {
        $searchModel = new SystemLogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (strcasecmp(Yii::$app->request->method, 'delete') == 0) {
            SystemLog::deleteAll($dataProvider->query->where);
            return $this->refresh();
        }
        $dataProvider->sort = [
            'defaultOrder'=>['log_time'=>SORT_DESC]
        ];
        return $this->render('index-log', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single SystemLog model.
     * @param integer $id
     * @return mixed
     */
    public function actionViewLog($id)
    {
        return $this->render('view-log', [
            'model' => $this->findModel($id),
        ]);
    }


    /**
     * Deletes an existing SystemLog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDeleteLog($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }


    /**
     * Finds the SystemLog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SystemLog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SystemLog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionFileManager()
    {
        return $this->render('file-manager');
    }

}
