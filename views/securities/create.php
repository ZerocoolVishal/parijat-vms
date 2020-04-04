<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Securities */

$this->title = 'Create Securities';
$this->params['breadcrumbs'][] = ['label' => 'Securities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="securities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
