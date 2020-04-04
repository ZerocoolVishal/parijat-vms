<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SecuritiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Securities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="securities-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Securities', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'security_id',
            'name',
            'email:email',
            'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
