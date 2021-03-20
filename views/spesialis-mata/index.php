<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-18 18:41:03 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-18 18:46:47
 */


use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\spesialis\McuSpesialisMataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemeriksaan Kesehatan Mata Tenaga Kerja';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <p>
                    <?= Html::a('Tambah Pemeriksaan', ['periksa'], ['class' => 'btn btn-success']) ?>
                </p>
                <div class="mcu-spesialis-mata-index">

                    <hr>

                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            // 'id_spesialis_mata',
                            // 'nama_no_rekam_medik',
                            // 'created_at',
                            // 'updated_at',
                            // 'created_by',
                            // 'updated_by',
                            //'persepsi_warna_mata_kanan',
                            //'persepsi_warna_mata_kiri',
                            //'kelopak_mata_kanan',
                            //'kelopak_mata_kiri',
                            //'konjungtiva_mata_kanan',
                            //'konjungtiva_mata_kiri',
                            //'kesegarisan_gerak_bola_mata_kanan',
                            //'kesegarisan_gerak_bola_mata_kiri',
                            //'skiera_mata_kanan',
                            //'skiera_mata_kiri',
                            //'lensa_mata_kanan',
                            //'lensa_mata_kiri',
                            //'kornea_mata_kanan',
                            //'kornea_mata_kiri',
                            //'bulu_mata_kanan',
                            //'bulu_mata_kiri',
                            //'tekanan_bola_mata_kanan',
                            //'tekanan_bola_mata_kiri',
                            //'penglihatan_3_dimensi_mata_kanan',
                            //'penglihatan_3_dimensi_mata_kiri',
                            //'virus_mata_tanpa_koreksi_mata_kanan',
                            //'virus_mata_tanpa_koreksi_mata_kiri',
                            //'virus_mata_dengan_koreksi_mata_kanan',
                            //'virus_mata_dengan_koreksi_mata_kiri',
                            //'lain_lain:ntext',
                            //'kesimpulan:ntext',
                            //'riwayat:ntext',

                            'nama_no_rm',
                            [
                                'label' => 'Tanggal Periksa',
                                'attribute' => 'created_at',
                                'value' => function ($model) {
                                    return Yii::$app->formatter->asDate($model->created_at, 'php:d-m-Y H:i:s');
                                }
                            ],

                            [
                                'class' => 'app\components\ActionColumnSpesialis',
                            ],
                        ],
                        'pager' => [
                            'class' => 'app\components\GridPager',
                        ],
                    ]); ?>

                    <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>