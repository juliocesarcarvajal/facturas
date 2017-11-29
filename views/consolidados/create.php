<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Consolidados */

$this->title = 'Crear Consolidados';
$this->params['breadcrumbs'][] = ['label' => 'Consolidados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consolidados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
