<?php

namespace app\controllers;

use Yii;
use app\models\Attendee;
use yii\web\Controller;

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
        $model = Attendee::findOne($id);
        $model->load($this->convertedParams(Yii::$app->request->getBodyParams()), '');
        $model->save();

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return null;
    }

    public function actionDelete($id)
    {
        Attendee::findOne($id)->delete();

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return null;
    }

    protected function convertedParams($params) //or your mapper
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
