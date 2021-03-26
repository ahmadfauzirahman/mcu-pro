<?php

use app\models\BaseAR;
use app\models\spesialis\BaseModel;
use kartik\select2\Select2;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $pertanyaanAnmesis app\models\anamnesa\PertanyaanAnmnesis */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Pemeriksaan Fisik';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .parent-no-margin .form-group {
        margin-bottom: 0.15rem;
    }

    .nav-link.active {
        font-weight: bold;

        background-color: #f3f5f7;
    }

    .nav-tabs-custom .nav-item .nav-link.active {
        color: #3b5de7;
        background-color: #f3f5f7;
    }

    .nav-tabs-custom .nav-item {
        /* position: relative; */
        color: #343a40;
        position: sticky !important;
        top: 240px;
    }

    .tabel-garis-hitam th,
    .tabel-garis-hitam td {
        border: 1px solid #000000 !important;
        border-collapse: collapse;
    }

    .float-group {
        position: fixed;
        bottom: 90px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        text-align: center;
        box-shadow: 2.5px 2.5px 5px #999;
        z-index: 100;
    }

    .float {
        position: fixed;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        text-align: center;
        box-shadow: 2.5px 2.5px 5px #999;
        z-index: 100;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div style="text-align: center;">
                    <h3 style="font-weight: bold; margin-bottom: 0px;">Unit Medical Check Up</h3>
                    <h3 style="font-weight: bold; margin-top: 0px;"><?= Html::encode($this->title) ?></h3>
                </div>

                <hr>


                <?php $form = ActiveForm::begin([]); ?>

                <?php
                echo $form->field($model, 'cari_pasien')->widget(Select2::classname(), [
                    'data' => BaseModel::getListPasien(),
                    'theme' => 'bootstrap',
                    'options' => ['placeholder' => 'Cari Pasien ...'],
                    'pluginOptions' => [
                        'allowClear' => false
                    ],
                    'pluginEvents' => [
                        "select2:select" => "function(e) { 
                            window.location = baseUrl + 'unit-pemeriksaan/index?id=' + e.params.data.id
                        }",
                    ],
                ]);
                ?>
                <br>
                <div class="form-group" style="margin-top: 5px; display: none;">
                    <?php
                    echo Html::submitButton('Simpan', ['class' => 'btn btn-success', 'id' => 'btn-form-cari']);
                    ?>
                </div>

                <?php ActiveForm::end(); ?>

                <?php $form = ActiveForm::begin([
                    'id' => 'form-pemeriksaan-fisik',
                    'validateOnSubmit' => false, // agar submit ajax tidak 2 kali saat pertama kali reload
                ]); ?>


                <div class="row parent-no-margin">
                    <div class="col-md-10">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label-sm">No. Rekam Medis</label>
                            <div class="col-sm-10">
                                <?= Html::input('text', 'no_rekam_medik', $pasien->no_rekam_medik, [
                                    'class' => 'form-control form-control-sm font-weight-bold',
                                    'readonly' => true,
                                ]) ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label-sm">Nama</label>
                            <div class="col-sm-10">
                                <?= Html::input('text', 'nama', $pasien->nama, [
                                    'class' => 'form-control form-control-sm font-weight-bold',
                                    'readonly' => true,
                                ]) ?>
                            </div>
                        </div>
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.5rem;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'tempat', $pasien->tempat, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'jenis_kelamin', BaseAR::getJk($pasien->jenis_kelamin), [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Status Perkawinan</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'status_perkawinan', $pasien->status_perkawinan, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Pendidikan</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'pendidikan', $pasien->pendidikan, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Alamat</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'alamat', $pasien->alamat, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">No. MCU</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'no_mcu', $pasien->no_mcu, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Tgl. Lahir</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'tgl_lahir', Yii::$app->formatter->asDate($pasien->tgl_lahir), [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Agama</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'agama', $pasien->agama, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Kedudukan dlm Keluarga</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'kedudukan_dalam_keluarga', $pasien->kedudukan_dalam_keluarga, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'pekerjaan', $pasien->pekerjaan, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Warga Negara</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'wni', $pasien->wni, [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label-sm">Tgl. Pemeriksaan</label>
                                    <div class="col-sm-8">
                                        <?= Html::input('text', 'tanggal_pemeriksaan', Yii::$app->formatter->asDate($pasien->tanggal_pemeriksaan), [
                                            'class' => 'form-control form-control-sm',
                                            'readonly' => true,
                                        ]) ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <?= Html::img($pasien->pasPhoto, ['class' => 'img-thumbnail rounded', 'style' => 'width: 100%;', 'alt' => 'Photo Pasien']) ?>

                        <div class="clearfix"></div>
                    </div>
                </div>

                <br>
                <hr>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-toggle="tab" href="#anamnesis" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Anamnesis</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#anamnesis-okupasi" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Anamnesis Okupasi</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#pemeriksaan-fisik" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Pemeriksaan Fisik</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" data-toggle="tab" href="#resume" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Resume</span>
                        </a>
                    </li>
                </ul>


                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="anamnesis" role="tabpanel">
                        <?= $this->render('tab-anamnesis', [
                            'form' => $form,
                            'pertanyaanAnmesis' => $pertanyaanAnmesis,
                        ]) ?>
                    </div>
                    <div class="tab-pane" id="anamnesis-okupasi" role="tabpanel">
                        <?= $this->render('tab-anamnesis-okupasi', [
                            'form' => $form,
                            'pasien' => $pasien,
                        ]) ?>
                    </div>
                    <div class="tab-pane " id="pemeriksaan-fisik" role="tabpanel">
                        <?= $this->render('tab-pemeriksaan-fisik', [
                            'form' => $form,
                            'model' => $model,
                            'pasien' => $pasien,
                        ]) ?>
                    </div>
                    <div class="tab-pane" id="resume" role="tabpanel">
                        <?= $this->render('tab-resume', [
                            'form' => $form,
                            'modelPenanta' => $modelPenanta
                        ]) ?>
                    </div>
                </div>

                <!-- <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
                    <i class="fa fa-whatsapp my-float"></i>
                </a> -->

                <?php
                if (!$pasien->isNewRecord) :
                ?>
                    <div class="float-group btn-group-vertical" role="group" aria-label="Vertical button group">
                        <a title="<?= $pasien->no_rekam_medik . ' / ' . $pasien->nama . ' / No. Daftar: ' . $pasien->no_registrasi ?>" href="<?= Url::to(['/']) ?>" class="btn btn-lg btn-primary" style="width: 150px; font-size: small;"><i class="fas fa-tooth"></i> Spesialis Gigi</a>
                        <a title="<?= $pasien->no_rekam_medik . ' / ' . $pasien->nama . ' / No. Daftar: ' . $pasien->no_registrasi ?>" href="<?= Url::to(['/']) ?>" class="btn btn-lg btn-danger" style="width: 150px; font-size: small;"><i class="fas fa-eye"></i> Spesialis Mata</a>
                        <a title="<?= $pasien->no_rekam_medik . ' / ' . $pasien->nama . ' / No. Daftar: ' . $pasien->no_registrasi ?>" href="<?= Url::to(['/']) ?>" class="btn btn-lg btn-info" style="width: 150px; font-size: small;"><i class="fas fa-assistive-listening-systems"></i> Spesialis THT</a>
                    </div>

                    <button type="button" class="float btn btn-success waves-effect waves-light" style="width: 150px; font-size: small;">
                        <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Simpan
                    </button>
                <?php
                endif;
                ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>