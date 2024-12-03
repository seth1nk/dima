<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Oboryd $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="oboryd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IP_адрес')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mac_адрес')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Местоположение')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Дата_установки')->textInput() ?>

    <?= $form->field($model, 'Время_установки')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
