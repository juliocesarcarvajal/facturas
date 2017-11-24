<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Estratos */

$this->title = 'Create Estratos';
$this->params['breadcrumbs'][] = ['label' => 'Estratos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estratos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
