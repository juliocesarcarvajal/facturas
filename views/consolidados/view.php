<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Consolidados */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Consolidados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consolidados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estás seguro que quieres borrar este consolidado?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cliente_id',
            'cargo_fijo',
            'cargo_variable',
        ],
    ]) ?>

</div>
