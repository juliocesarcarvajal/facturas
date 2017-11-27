<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Facturas */

$this->title = 'Actualizar Factura: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Facturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="facturas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
