<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\anamnesa\PertanyaanAnmnesis */

$this->title = 'Create Pertanyaan Anmnesis';
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaan Anmneses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-anmnesis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
