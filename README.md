# Пример приложения, реализующего синхронизацию изменений участников с сервисом Eventicious
Код в данном репозитории служит иллюстрацией к документации Eventicious Public API.

`./config/web.php`:
```php
            'rules' => [
                'POST attendees-sync/Create'=> 'attendees-sync/create',
                'PUT attendees-sync/Update/<id:\d+>'=> 'attendees-sync/update',
                'DELETE attendees-sync/Delete/<id:\d+>'=> 'attendees-sync/delete',
            ],
```
В таком варианте url-адрес, который вы сообщите нашей службе поддержки, будет иметь вид https://yourservice.com/attendees-sync

`./controllers/AttendeesSyncController.php`:
```php
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
```
