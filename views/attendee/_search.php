<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AttendeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attendee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'firstName') ?>

    <?= $form->field($model, 'lastName') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'vk') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'showEmail')->checkbox() ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'showPhone')->checkbox() ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'externalImagePath') ?>

    <?php // echo $form->field($model, 'externalThumbnailPath') ?>

    <?php // echo $form->field($model, 'isSpeaker')->checkbox() ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'networkingCode') ?>

    <?php // echo $form->field($model, 'authorized')->checkbox() ?>

    <?php // echo $form->field($model, 'confirmed')->checkbox() ?>

    <?php // echo $form->field($model, 'moderated')->checkbox() ?>

    <?php // echo $form->field($model, 'withdrawed')->checkbox() ?>

    <?php // echo $form->field($model, 'privateInfo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
