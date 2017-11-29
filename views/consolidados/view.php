<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Clientes;

/* @var $this yii\web\View */
/* @var $model app\models\Consolidados */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Consolidados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consolidados-view">

    <h1>Consolidado número <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cliente_id' => array('label' => 'Cliente', 'value' => Clientes::findOne($model->cliente_id)->nombres.' '.Clientes::findOne($model->cliente_id)->apellidos),
            'cargo_basico',
            'cargo_variable',
            'estrato',
            'numero_horas',
            'valor_hora',
            'sub_total_horas',
            'numero_minutos',
            'valor_minuto',
            'sub_total_minutos',
            'numero_kb',
            'valor_kb',
            'sub_total_kb',
            'total',
        ],
    ]) ?>

</div>
