<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\anamnesa\PertanyaanAnmnesis */

$this->title = 'Update Pertanyaan Anmnesis: ' . $model->id_anamnesis;
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaan Anmneses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_anamnesis, 'url' => ['view', 'id' => $model->id_anamnesis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pertanyaan-anmnesis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
