<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataPelayanan */

$this->title = 'Create Data Pelayanan';
$this->params['breadcrumbs'][] = ['label' => 'Data Pelayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pelayanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
