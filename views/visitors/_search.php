<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VisitorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visitors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'visitor_id') ?>

    <?= $form->field($model, 'security_id') ?>

    <?= $form->field($model, 'flat_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'contact_no') ?>

    <?php // echo $form->field($model, 'coming_from') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
