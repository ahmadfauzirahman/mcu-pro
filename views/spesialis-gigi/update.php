<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\spesialis\gigi\SpesialisGigi */

$this->title = 'Update Spesialis Gigi: ' . $model->id_spesialis_gigi;
$this->params['breadcrumbs'][] = ['label' => 'Spesialis Gigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_spesialis_gigi, 'url' => ['view', 'id' => $model->id_spesialis_gigi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spesialis-gigi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
