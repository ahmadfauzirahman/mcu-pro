<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\spesialis\gigi\SpesialisGigi */

$this->title = 'Create Spesialis Gigi';
$this->params['breadcrumbs'][] = ['label' => 'Spesialis Gigis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spesialis-gigi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
