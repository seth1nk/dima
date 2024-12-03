<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Oboryd $model */

$this->title = 'Добавить оборудование';
$this->params['breadcrumbs'][] = ['label' => 'Оборудование', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oboryd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
