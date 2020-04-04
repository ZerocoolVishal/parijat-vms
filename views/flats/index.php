<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FlatsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flats-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Flats', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'flat_id',
            'flat_no',
            'wing_id',
            'owner_name',
            'contact_no',
            //'stay_by',
            //'username',
            //'password',
            //'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
