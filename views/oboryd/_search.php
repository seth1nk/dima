<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OborydSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="oboryd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'название') ?>

    <?= $form->field($model, 'IP_адрес') ?>

    <?= $form->field($model, 'mac_адрес') ?>

    <?= $form->field($model, 'Местоположение') ?>

    <?php // echo $form->field($model, 'Дата_установки') ?>

    <?php // echo $form->field($model, 'Время_установки') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
