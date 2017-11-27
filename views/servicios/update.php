<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Servicios */

$this->title = 'Actualizar Servicio: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="servicios-update">

    <h1><?= Html::encode($model->nombre) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
