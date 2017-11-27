<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Clientes;
use app\models\Facturas;

/* @var $this yii\web\View */
/* @var $model app\models\Consolidados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consolidados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cliente_id')->dropDownList(
      ArrayHelper::map(Clientes::find()->all(),
      'id', 'nombres', 'apellidos'),['prompt'=>'Seleccione un cliente']);
    ?>

    <?= $form->field($model, 'cargo_fijo')->dropDownList(['20000' => '20000'],['prompt'=>'Seleccione el cargo básico']); ?>

    <!--?= $form->field($model, 'cargo_variable')->textInput() ?-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
