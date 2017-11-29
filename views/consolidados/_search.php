<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsolidadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consolidados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cliente_id') ?>

    <?= $form->field($model, 'cargo_basico') ?>

    <?= $form->field($model, 'cargo_variable') ?>

    <?= $form->field($model, 'estrato') ?>

    <?php // echo $form->field($model, 'numero_horas') ?>

    <?php // echo $form->field($model, 'valor_hora') ?>

    <?php // echo $form->field($model, 'sub_total_horas') ?>

    <?php // echo $form->field($model, 'numero_minutos') ?>

    <?php // echo $form->field($model, 'valor_minuto') ?>

    <?php // echo $form->field($model, 'sub_total_minutos') ?>

    <?php // echo $form->field($model, 'numero_kb') ?>

    <?php // echo $form->field($model, 'valor_kb') ?>

    <?php // echo $form->field($model, 'sub_total_kb') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
