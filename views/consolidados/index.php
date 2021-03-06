<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsolidadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consolidados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consolidados-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--?= Html::a('Create Consolidados', ['create'], ['class' => 'btn btn-success']) ?-->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'cliente_id',
            'cargo_basico',
            //'cargo_variable',
            'estrato',
            'numero_horas',
            // 'valor_hora',
            // 'sub_total_horas',
            'numero_minutos',
            // 'valor_minuto',
            // 'sub_total_minutos',
            'numero_kb',
            // 'valor_kb',
            // 'sub_total_kb',
            'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
