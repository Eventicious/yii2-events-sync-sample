<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Attendee */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Attendees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'firstName',
            'lastName',
            'position',
            'city',
            'vk',
            'twitter',
            'facebook',
            'email:email',
            'showEmail:boolean',
            'phone',
            'showPhone:boolean',
            'description',
            'externalImagePath',
            'externalThumbnailPath',
            'isSpeaker:boolean',
            'company',
            'language',
            'networkingCode',
            'authorized:boolean',
            'confirmed:boolean',
            'moderated:boolean',
            'withdrawed:boolean',
            'privateInfo',
        ],
    ]) ?>

</div>
