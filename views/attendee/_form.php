<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Attendee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attendee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstName')->textInput() ?>

    <?= $form->field($model, 'lastName')->textInput() ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'city')->textInput() ?>

    <?= $form->field($model, 'vk')->textInput() ?>

    <?= $form->field($model, 'twitter')->textInput() ?>

    <?= $form->field($model, 'facebook')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'showEmail')->checkbox() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'showPhone')->checkbox() ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'externalImagePath')->textInput() ?>

    <?= $form->field($model, 'externalThumbnailPath')->textInput() ?>

    <?= $form->field($model, 'isSpeaker')->checkbox() ?>

    <?= $form->field($model, 'company')->textInput() ?>

    <?= $form->field($model, 'language')->textInput() ?>

    <?= $form->field($model, 'networkingCode')->textInput() ?>

    <?= $form->field($model, 'authorized')->checkbox() ?>

    <?= $form->field($model, 'confirmed')->checkbox() ?>

    <?= $form->field($model, 'moderated')->checkbox() ?>

    <?= $form->field($model, 'withdrawed')->checkbox() ?>

    <?= $form->field($model, 'privateInfo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
