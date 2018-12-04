<?php

namespace app\controllers;

use Yii;
use app\models\Attendee;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AttendeesSyncController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionCreate()
    {
        $model = new Attendee();
        $model->load($this->convertedParams(Yii::$app->request->getBodyParams()), '');
        $model->save();

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'id' => $model->id,
        ];
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->load($this->convertedParams(Yii::$app->request->getBodyParams()), '');
        $model->save();

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return null;
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return null;
    }

    /**
     * Finds the Attendee model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Attendee the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Attendee::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    protected function convertedParams($params)
    {
        $attendeeFields = ['firstName', 'lastName', 'position', 'city', 'vk', 'twitter', 'facebook', 'email', 'showEmail', 'phone', 'showPhone', 'description', 'externalImagePath', 'externalThumbnailPath', 'isSpeaker', 'company', 'language', 'networkingCode', 'authorized', 'confirmed', 'moderated', 'withdrawed', 'privateInfo'];
        $attendeeHash = [];
        foreach ($attendeeFields as $attendeeField) {
            $paramsField = $attendeeField;
            $paramsField[0] = strtoupper($paramsField[0]);
            $attendeeHash[$attendeeField] = $params[$paramsField];
        }
        return $attendeeHash;
    }
}
