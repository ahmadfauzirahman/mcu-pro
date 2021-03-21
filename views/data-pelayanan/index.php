<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataPelayananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pelayanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pelayanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Pelayanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-sm table-bordered table-hover table-list-item'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_data_pelayanan',
            'no_rekam_medik',
            'no_mcu',
            'nama',
            'tempat',
            //'tgl_lahir',
            //'agama',
            //'kedudukan_dalam_keluarga',
            //'status_perkawinan',
            //'pendidikan',
            //'pekerjaan',
            //'alamat:ntext',
            //'wni',
            //'tanggal_pemeriksaan',
            //'pas_foto_offline:ntext',
            //'pas_foto_online_valid',
            //'kode_debitur',
            //'kode_paket',
            //'no_registrasi',
            //'jenis_kelamin',
            //'no_ujian',

            [
                'class' => 'app\components\ActionColumn',
            ]   ,
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>