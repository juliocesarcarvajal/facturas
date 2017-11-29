<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Consolidados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consolidados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cliente_id')->textInput() ?>

    <?= $form->field($model, 'cargo_basico')->textInput() ?>

    <?= $form->field($model, 'cargo_variable')->textInput() ?>

    <?= $form->field($model, 'estrato')->textInput() ?>

    <?= $form->field($model, 'numero_horas')->textInput() ?>

    <?= $form->field($model, 'valor_hora')->textInput() ?>

    <?= $form->field($model, 'sub_total_horas')->textInput() ?>

    <?= $form->field($model, 'numero_minutos')->textInput() ?>

    <?= $form->field($model, 'valor_minuto')->textInput() ?>

    <?= $form->field($model, 'sub_total_minutos')->textInput() ?>

    <?= $form->field($model, 'numero_kb')->textInput() ?>

    <?= $form->field($model, 'valor_kb')->textInput() ?>

    <?= $form->field($model, 'sub_total_kb')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
