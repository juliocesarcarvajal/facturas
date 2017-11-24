<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstratosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Estratos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estratos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Estratos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'estrato',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
