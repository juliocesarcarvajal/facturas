<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FacturasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Facturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facturas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Factura', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'fecha',
            'servicio_id',
            'cliente_id',
            'tiempo',
            'unidad_medida',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
