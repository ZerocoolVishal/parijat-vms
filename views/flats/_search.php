<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FlatsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flats-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'flat_id') ?>

    <?= $form->field($model, 'flat_no') ?>

    <?= $form->field($model, 'wing_id') ?>

    <?= $form->field($model, 'owner_name') ?>

    <?= $form->field($model, 'contact_no') ?>

    <?php // echo $form->field($model, 'stay_by') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
