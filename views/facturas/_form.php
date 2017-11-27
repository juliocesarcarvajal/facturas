<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Clientes;
use app\models\Servicios;

/* @var $this yii\web\View */
/* @var $model app\models\Facturas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="facturas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cliente_id')->dropDownList(
      ArrayHelper::map(Clientes::find()->all(),
      'id', 'nombres', 'apellidos'),['prompt'=>'Seleccione un cliente']);
    ?>

    <?= $form->field($model, 'servicio_id')->dropDownList(
      ArrayHelper::map(Servicios::find()->all(),'id','nombre'),['prompt'=>'Seleccione un servicio']);
    ?>

    <?= $form->field($model, 'tiempo')->textInput() ?>

    <?= $form->field($model, 'unidad_medida')->dropDownList(['Horas' => 'Horas', 'Minutos' => 'Minutos', 'Kb' => 'Kb'],['prompt'=>'Seleccione la unidad de medida']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
