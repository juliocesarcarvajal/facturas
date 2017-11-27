<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Servicios;
use app\models\Clientes;

/* @var $this yii\web\View */
/* @var $model app\models\Facturas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facturas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estás seguro que deseas borrar esta fáctura?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fecha',
            'servicio_id' => array('label' => 'Servicio', 'value' => Servicios::findOne($model->servicio_id)->nombre),
            'cliente_id' => array('label' => 'Cliente', 'value' => Clientes::findOne($model->cliente_id)->nombres.' '.Clientes::findOne($model->cliente_id)->apellidos),
            'tiempo',
            'unidad_medida',
        ],
    ]) ?>

</div>
